<?php

/**
 * Description of JogoApp
 *
 * @author thiago
 */

namespace App;

use \InvalidArgumentException as Exception,
    \RuntimeException;

class JogoApp {

    private $rotas;

    /**
     * 
     * @param type $rota
     * @param type $acao
     */
    public function get($rota, $acao) {
        $this->isCallable($acao);

        if (preg_match_all('@{[a-z0-9A-Z_]+}@', $rota, $matches)) {
            $rota = str_replace('+', '\+', $rota);
            array_walk($matches[0], function($match) use (&$rota) {
                        $rota = str_replace($match, '([a-z0-9A-Z_]+)', $rota);
                    });
            $rota = '@^' . $rota . '$@';
        }

        $this->rotas['GET'][$rota] = $acao;
    }

    /**
     * 
     * @param type $rota
     * @param type $acao
     */
    public function post($rota, $acao) {
        $this->isCallable($acao);
        $this->rotas['POST'][$rota] = $acao;
    }

    /**
     * 
     * @param type $acao
     * @throws Exception
     */
    private function isCallable($acao) {
        if (!is_callable($acao))
            throw new Exception();
    }

    /**
     * 
     * @param type $url
     */
    public function run($url) {
        $method = ($_SERVER['REQUEST_METHOD'] == 'POST') ? 'POST' : 'GET';
        try {
            if (isset($this->rotas[$method][$url])) {
                $acao = $this->rotas[$method][$url];
                $acao();
            } else {
                $this->comParametros($url, $method);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * 
     * @param type $url
     * @param type $method
     * @return type
     * @throws Exception
     */
    private function comParametros($url, $method) {
        $rotas = $this->rotas[$method];
        foreach ($rotas as $rota => $acao) {
            if (strpos($rota, '@') === 0) {
                if (preg_match($rota, $url, $vars)) {
                    array_shift($vars);
                    call_user_func_array($acao, $vars);
                    return;
                }
            }
        }

        throw new Exception('rota não encontrada');
    }

}