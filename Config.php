<?php
/*
| Arquivo de configuração
*/
class Config{
  private static $configs = [
    //Básico
    'titulo_site' => 'L2Site - O melhor servidor de Lineage 2 da atualidade',

    //MySQL
    'database_servidor' => 'localhost', //Endereço do servidor MySQL
    'database_usuario' => 'root',
    'database_senha' => 'root',
    'database_nome' => 'l2java',

    //Colunas da tabela 'characters'
    'access_level' => 'accesslevel',

    //Layout Padrão - Não altere sem saber o que está fazendo
    'layout_padrao' => 'layouts/app.tpl.php'
  ];

  public static function get($key){
    return self::$configs[$key];
  }
}
