<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Mvc',
    'file' => '/root/myzephir/mvc/mvc/applications.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Applications',
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
          'name' => 'router',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 5,
              'char' => 44,
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
                  'variable' => 'path',
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 7,
                  'char' => 11,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 8,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'serpath',
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 8,
                  'char' => 14,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 9,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'controller',
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 9,
                  'char' => 17,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 11,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'serpath',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => '_SERVER',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 11,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'REQUEST_URI',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 11,
                      'char' => 38,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 11,
                    'char' => 39,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 11,
                  'char' => 39,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 13,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'serpath',
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 13,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '/index.php',
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 13,
                  'char' => 30,
                ),
                'file' => '/root/myzephir/mvc/mvc/applications.zep',
                'line' => 13,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'constant',
                        'value' => 'CTR_PATH',
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 14,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 14,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'default_controller',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 14,
                          'char' => 48,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 14,
                        'char' => 49,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 14,
                      'char' => 49,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '.php',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 14,
                      'char' => 56,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 14,
                    'char' => 56,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 15,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 15,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'default_controller',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 15,
                      'char' => 38,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 15,
                    'char' => 39,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 16,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 18,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'controller',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'explode',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => '?',
                            'file' => '/root/myzephir/mvc/mvc/applications.zep',
                            'line' => 18,
                            'char' => 31,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 18,
                          'char' => 31,
                        ),
                        1 => 
                        array (
                          'parameter' => 
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
                                  'value' => '/index.php/',
                                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                                  'line' => 18,
                                  'char' => 57,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/applications.zep',
                                'line' => 18,
                                'char' => 57,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '',
                                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                                  'line' => 18,
                                  'char' => 61,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/applications.zep',
                                'line' => 18,
                                'char' => 61,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'serpath',
                                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                                  'line' => 18,
                                  'char' => 70,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/applications.zep',
                                'line' => 18,
                                'char' => 70,
                              ),
                            ),
                            'file' => '/root/myzephir/mvc/mvc/applications.zep',
                            'line' => 18,
                            'char' => 71,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 18,
                          'char' => 71,
                        ),
                      ),
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 18,
                      'char' => 72,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '0',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 18,
                      'char' => 76,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 18,
                    'char' => 77,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 18,
                  'char' => 77,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 19,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'path',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'constant',
                        'value' => 'CTR_PATH',
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 19,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'controller',
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 19,
                        'char' => 33,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 19,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '.php',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 19,
                      'char' => 40,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 19,
                    'char' => 40,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 19,
                  'char' => 40,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 20,
              'char' => 4,
            ),
            7 => 
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
                      'value' => 'path',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 20,
                      'char' => 22,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 20,
                    'char' => 22,
                  ),
                ),
                'file' => '/root/myzephir/mvc/mvc/applications.zep',
                'line' => 20,
                'char' => 24,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'path',
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 21,
                    'char' => 16,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 22,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
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
                          'value' => '/',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 22,
                          'char' => 26,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 22,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '_',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 22,
                          'char' => 31,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 22,
                        'char' => 31,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'controller',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 22,
                          'char' => 43,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 22,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 22,
                    'char' => 44,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 23,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'constant',
                        'value' => 'CTR_PATH',
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 24,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 24,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '404_controller',
                          'file' => '/root/myzephir/mvc/mvc/applications.zep',
                          'line' => 24,
                          'char' => 44,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/applications.zep',
                        'line' => 24,
                        'char' => 45,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 24,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '.php',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 24,
                      'char' => 52,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 24,
                    'char' => 52,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 25,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 25,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '404_controller',
                      'file' => '/root/myzephir/mvc/mvc/applications.zep',
                      'line' => 25,
                      'char' => 34,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/applications.zep',
                    'line' => 25,
                    'char' => 35,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/applications.zep',
                  'line' => 26,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/applications.zep',
              'line' => 27,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/applications.zep',
          'line' => 29,
          'char' => 1,
        ),
      ),
      'file' => '/root/myzephir/mvc/mvc/applications.zep',
      'line' => 29,
      'char' => 1,
    ),
    'file' => '/root/myzephir/mvc/mvc/applications.zep',
    'line' => 30,
    'char' => 0,
  ),
);