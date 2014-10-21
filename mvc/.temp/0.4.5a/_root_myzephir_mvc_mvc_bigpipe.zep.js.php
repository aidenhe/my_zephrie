<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Mvc',
    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Bigpipe',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'tplpath',
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 6,
          'char' => 7,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'tpl',
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 8,
          'char' => 7,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'isSkeleton',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
            'line' => 8,
            'char' => 27,
          ),
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 10,
          'char' => 7,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'child',
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 13,
          'char' => 7,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'pageletData',
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 15,
          'char' => 7,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'tpl',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'constant',
                        'value' => 'APP_PATH',
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 17,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '/',
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 17,
                        'char' => 34,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 17,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 17,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tpl',
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 17,
                        'char' => 45,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 17,
                      'char' => 45,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                    'line' => 17,
                    'char' => 45,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 17,
                  'char' => 45,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 19,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 19,
                  'char' => 8,
                ),
                'name' => 'render',
                'call-type' => 1,
                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                'line' => 19,
                'char' => 17,
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 21,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 22,
          'char' => 7,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'prepareData',
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 27,
          'char' => 7,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getJson',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'json_decode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'file_get_contents',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'constant',
                                  'value' => 'APP_PATH',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 29,
                                  'char' => 49,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '/',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 29,
                                  'char' => 55,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                'line' => 29,
                                'char' => 55,
                              ),
                              'right' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 29,
                                  'char' => 62,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'tplpath',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 29,
                                  'char' => 71,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                'line' => 29,
                                'char' => 71,
                              ),
                              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                              'line' => 29,
                              'char' => 71,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'page_config.json',
                              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                              'line' => 29,
                              'char' => 91,
                            ),
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 29,
                            'char' => 91,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 29,
                          'char' => 91,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 29,
                            'char' => 97,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 29,
                          'char' => 97,
                        ),
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 29,
                      'char' => 98,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                    'line' => 29,
                    'char' => 98,
                  ),
                ),
                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                'line' => 29,
                'char' => 99,
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 30,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 33,
          'char' => 7,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'render',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'pageletData',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 35,
                      'char' => 32,
                    ),
                    'name' => 'prepareData',
                    'call-type' => 1,
                    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                    'line' => 35,
                    'char' => 46,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 35,
                  'char' => 46,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 42,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 42,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'isSkeleton',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 42,
                  'char' => 23,
                ),
                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                'line' => 42,
                'char' => 23,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 43,
                      'char' => 9,
                    ),
                    'name' => '_renderPage',
                    'call-type' => 1,
                    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                    'line' => 43,
                    'char' => 23,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 44,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 48,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 50,
          'char' => 7,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '_renderPage',
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
                  'variable' => 'jsonconfig',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 52,
                  'char' => 17,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 53,
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
                  'variable' => 'jsonconfig',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_object_vars',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 53,
                            'char' => 41,
                          ),
                          'name' => 'getJson',
                          'call-type' => 1,
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 53,
                          'char' => 51,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 53,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                    'line' => 53,
                    'char' => 52,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 53,
                  'char' => 52,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 54,
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
                  'variable' => 'plid',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 54,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'pl',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 54,
                  'char' => 15,
                ),
                2 => 
                array (
                  'variable' => 'pagelet',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 54,
                  'char' => 24,
                ),
                3 => 
                array (
                  'variable' => 'plclass',
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 54,
                  'char' => 32,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 55,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'jsonconfig',
                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                'line' => 55,
                'char' => 30,
              ),
              'key' => 'plid',
              'value' => 'pl',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'plclass',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'new',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 56,
                            'char' => 24,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' ',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 56,
                            'char' => 30,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 56,
                          'char' => 30,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'plid',
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 56,
                          'char' => 36,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 56,
                        'char' => 36,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 56,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 57,
                  'char' => 6,
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
                      'variable' => 'pagelet',
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
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 57,
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
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 57,
                                  'char' => 44,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                'line' => 57,
                                'char' => 44,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '/',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 57,
                                  'char' => 49,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                'line' => 57,
                                'char' => 49,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'plid',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 57,
                                  'char' => 55,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                'line' => 57,
                                'char' => 55,
                              ),
                            ),
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 57,
                            'char' => 57,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 57,
                          'char' => 57,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '.php',
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 57,
                          'char' => 65,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 57,
                        'char' => 65,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 57,
                      'char' => 65,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 58,
                  'char' => 5,
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
                          'value' => 'pagelet',
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 58,
                          'char' => 26,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 58,
                        'char' => 26,
                      ),
                    ),
                    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                    'line' => 58,
                    'char' => 28,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property-array-index',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'child',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'plid',
                              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                              'line' => 59,
                              'char' => 25,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'eval',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'plclass',
                                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                  'line' => 59,
                                  'char' => 40,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                                'line' => 59,
                                'char' => 40,
                              ),
                            ),
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 59,
                            'char' => 41,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 59,
                          'char' => 41,
                        ),
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 61,
                      'char' => 4,
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
                            'type' => 'variable',
                            'value' => 'pagelet',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 62,
                            'char' => 18,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'REQUIRE ERROR',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 62,
                            'char' => 35,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 62,
                          'char' => 35,
                        ),
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 63,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 64,
                  'char' => 6,
                ),
                3 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'childobject',
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 64,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'variable' => 'plconfig',
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 64,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 65,
                  'char' => 6,
                ),
                4 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'plconfig',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'get_object_vars',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pl',
                              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                              'line' => 65,
                              'char' => 37,
                            ),
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 65,
                            'char' => 37,
                          ),
                        ),
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 65,
                        'char' => 38,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 65,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 66,
                  'char' => 6,
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
                      'variable' => 'childobject',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 66,
                            'char' => 27,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'child',
                            'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                            'line' => 66,
                            'char' => 33,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 66,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'plid',
                          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                          'line' => 66,
                          'char' => 38,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 66,
                        'char' => 39,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 66,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 67,
                  'char' => 6,
                ),
                6 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'childobject',
                      'property' => 'plconfig',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'plconfig',
                        'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                        'line' => 67,
                        'char' => 40,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                      'line' => 67,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
                  'line' => 69,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
              'line' => 70,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
          'line' => 76,
          'char' => 1,
        ),
      ),
      'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
      'line' => 76,
      'char' => 1,
    ),
    'file' => '/root/myzephir/mvc/mvc/bigpipe.zep',
    'line' => 77,
    'char' => 0,
  ),
);