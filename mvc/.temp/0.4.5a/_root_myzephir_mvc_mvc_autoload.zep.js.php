<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Mvc',
    'file' => '/root/myzephir/mvc/mvc/autoload.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Autoload',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'load',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'model',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
              'line' => 5,
              'char' => 42,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'modelpath',
                  'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                  'line' => 7,
                  'char' => 16,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
              'line' => 8,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'modelpath',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'constant',
                        'value' => 'LIB_PATH',
                        'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                        'line' => 8,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'str_replace',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '_',
                              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                              'line' => 8,
                              'char' => 43,
                            ),
                            'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                            'line' => 8,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '/',
                              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                              'line' => 8,
                              'char' => 48,
                            ),
                            'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                            'line' => 8,
                            'char' => 48,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'model',
                              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                              'line' => 8,
                              'char' => 55,
                            ),
                            'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                            'line' => 8,
                            'char' => 55,
                          ),
                        ),
                        'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                        'line' => 8,
                        'char' => 56,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                      'line' => 8,
                      'char' => 56,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '.php',
                      'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                      'line' => 8,
                      'char' => 63,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                    'line' => 8,
                    'char' => 63,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                  'line' => 8,
                  'char' => 63,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
              'line' => 9,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'file_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'modelpath',
                      'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                      'line' => 9,
                      'char' => 27,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                    'line' => 9,
                    'char' => 27,
                  ),
                ),
                'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                'line' => 9,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'modelpath',
                    'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                    'line' => 10,
                    'char' => 21,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                  'line' => 11,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'echo',
                  'expressions' => 
                  array (
                    0 => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'modelpath',
                          'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                          'line' => 12,
                          'char' => 19,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '\\r',
                          'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                          'line' => 12,
                          'char' => 26,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                        'line' => 12,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'ERROR',
                        'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                        'line' => 12,
                        'char' => 35,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                      'line' => 12,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                  'line' => 13,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
              'line' => 14,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/autoload.zep',
          'line' => 15,
          'char' => 7,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'register',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'loader',
              'const' => 0,
              'data-type' => 'object',
              'mandatory' => 0,
              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
              'line' => 15,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'spl_autoload_register',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'loader',
                            'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                            'line' => 16,
                            'char' => 32,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                          'line' => 16,
                          'char' => 32,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'load',
                            'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                            'line' => 16,
                            'char' => 40,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                          'line' => 16,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                      'line' => 16,
                      'char' => 41,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                    'line' => 16,
                    'char' => 41,
                  ),
                ),
                'file' => '/root/myzephir/mvc/mvc/autoload.zep',
                'line' => 16,
                'char' => 42,
              ),
              'file' => '/root/myzephir/mvc/mvc/autoload.zep',
              'line' => 17,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/autoload.zep',
          'line' => 19,
          'char' => 1,
        ),
      ),
      'file' => '/root/myzephir/mvc/mvc/autoload.zep',
      'line' => 19,
      'char' => 1,
    ),
    'file' => '/root/myzephir/mvc/mvc/autoload.zep',
    'line' => 20,
    'char' => 0,
  ),
);