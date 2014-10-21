<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Mvc',
    'file' => '/root/myzephir/mvc/mvc/controller.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Controller',
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
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/root/myzephir/mvc/mvc/controller.zep',
            'line' => 5,
            'char' => 21,
          ),
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
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
          'name' => 'dataConfig',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/root/myzephir/mvc/mvc/controller.zep',
            'line' => 6,
            'char' => 24,
          ),
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 7,
          'char' => 7,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'data',
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 9,
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
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 13,
          'char' => 7,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'run',
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 17,
          'char' => 7,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'renderPage',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'page',
              'const' => 0,
              'data-type' => 'object',
              'mandatory' => 0,
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 17,
              'char' => 40,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'page',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 19,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'isSkeleton',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 19,
                  'char' => 23,
                ),
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 19,
                'char' => 23,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'page',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 20,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tpl',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 20,
                      'char' => 21,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 20,
                    'char' => 21,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 21,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 23,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'page',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 23,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'child',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 23,
                      'char' => 23,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 23,
                    'char' => 23,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 23,
                  'char' => 24,
                ),
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 23,
                'char' => 24,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 24,
                    'char' => 16,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 25,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 26,
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
                  'variable' => 'child',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 26,
                  'char' => 12,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 27,
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
                  'variable' => 'child',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'page',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 27,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'child',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 27,
                      'char' => 26,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 27,
                    'char' => 26,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 27,
                  'char' => 26,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 28,
              'char' => 6,
            ),
            4 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 28,
                  'char' => 8,
                ),
                'name' => 'renderpl',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'child',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 28,
                      'char' => 23,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 28,
                    'char' => 23,
                  ),
                ),
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 28,
                'char' => 24,
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 29,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 31,
          'char' => 7,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'renderpl',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'child',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 31,
              'char' => 38,
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
                  'variable' => 'pl',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 9,
                ),
                1 => 
                array (
                  'variable' => 'pltemplate',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 21,
                ),
                2 => 
                array (
                  'variable' => 'key',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 26,
                ),
                3 => 
                array (
                  'variable' => 'value',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 33,
                ),
                4 => 
                array (
                  'variable' => 'html',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 38,
                ),
                5 => 
                array (
                  'variable' => 'fun',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 42,
                ),
                6 => 
                array (
                  'variable' => 'jsonvalue',
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 33,
                  'char' => 52,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 35,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'child',
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 35,
                'char' => 30,
              ),
              'key' => 'pl',
              'value' => 'pltemplate',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ob_start',
                    'call-type' => 1,
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 36,
                    'char' => 14,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 37,
                  'char' => 10,
                ),
                1 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pltemplate',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 37,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tpl',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 37,
                      'char' => 27,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 37,
                    'char' => 27,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 38,
                  'char' => 6,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'html',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'ob_get_contents',
                        'call-type' => 1,
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 38,
                        'char' => 32,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 38,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 39,
                  'char' => 15,
                ),
                3 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ob_end_clean',
                    'call-type' => 1,
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 39,
                    'char' => 18,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 40,
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
                      'variable' => 'jsonvalue',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 40,
                        'char' => 22,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 40,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 41,
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
                      'variable' => 'fun',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pltemplate',
                            'file' => '/root/myzephir/mvc/mvc/controller.zep',
                            'line' => 41,
                            'char' => 25,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'plconfig',
                            'file' => '/root/myzephir/mvc/mvc/controller.zep',
                            'line' => 41,
                            'char' => 34,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 41,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'fun',
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 41,
                          'char' => 40,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 41,
                        'char' => 41,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 41,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 43,
                  'char' => 6,
                ),
                6 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'jsonvalue',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'domid',
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 43,
                          'char' => 25,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pltemplate',
                            'file' => '/root/myzephir/mvc/mvc/controller.zep',
                            'line' => 43,
                            'char' => 40,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'plconfig',
                            'file' => '/root/myzephir/mvc/mvc/controller.zep',
                            'line' => 43,
                            'char' => 49,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 43,
                          'char' => 49,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'domid',
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 43,
                          'char' => 57,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 43,
                        'char' => 58,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 43,
                      'char' => 58,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 44,
                  'char' => 6,
                ),
                7 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'jsonvalue',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'html',
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 44,
                          'char' => 24,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'html',
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 44,
                        'char' => 32,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 44,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 46,
                  'char' => 7,
                ),
                8 => 
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => '<script>',
                                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                                'line' => 46,
                                'char' => 20,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'fun',
                                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                                'line' => 46,
                                'char' => 26,
                              ),
                              'file' => '/root/myzephir/mvc/mvc/controller.zep',
                              'line' => 46,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '(',
                              'file' => '/root/myzephir/mvc/mvc/controller.zep',
                              'line' => 46,
                              'char' => 32,
                            ),
                            'file' => '/root/myzephir/mvc/mvc/controller.zep',
                            'line' => 46,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'json_encode',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'jsonvalue',
                                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                                  'line' => 46,
                                  'char' => 55,
                                ),
                                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                                'line' => 46,
                                'char' => 55,
                              ),
                            ),
                            'file' => '/root/myzephir/mvc/mvc/controller.zep',
                            'line' => 46,
                            'char' => 57,
                          ),
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 46,
                          'char' => 57,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ')',
                          'file' => '/root/myzephir/mvc/mvc/controller.zep',
                          'line' => 46,
                          'char' => 63,
                        ),
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 46,
                        'char' => 63,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '</script>\\r\\n',
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 46,
                        'char' => 80,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 46,
                      'char' => 80,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 47,
                  'char' => 7,
                ),
                9 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 47,
                      'char' => 9,
                    ),
                    'name' => 'makeflush',
                    'call-type' => 1,
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 47,
                    'char' => 21,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 49,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 51,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 53,
          'char' => 7,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'renderHtml',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 53,
              'char' => 39,
            ),
          ),
          'statements' => 
          array (
            0 => 
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 54,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'tplpath',
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 54,
                        'char' => 31,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 54,
                      'char' => 31,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 54,
                    'char' => 31,
                  ),
                ),
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 54,
                'char' => 33,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'data',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'data',
                        'file' => '/root/myzephir/mvc/mvc/controller.zep',
                        'line' => 55,
                        'char' => 25,
                      ),
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 55,
                      'char' => 25,
                    ),
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 56,
                  'char' => 10,
                ),
                1 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 56,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tplpath',
                      'file' => '/root/myzephir/mvc/mvc/controller.zep',
                      'line' => 56,
                      'char' => 25,
                    ),
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 56,
                    'char' => 25,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 58,
                  'char' => 3,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 59,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 61,
          'char' => 7,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'makeflush',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_get_level',
                'call-type' => 1,
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 63,
                'char' => 21,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ob_flush',
                    'call-type' => 1,
                    'file' => '/root/myzephir/mvc/mvc/controller.zep',
                    'line' => 64,
                    'char' => 25,
                  ),
                  'file' => '/root/myzephir/mvc/mvc/controller.zep',
                  'line' => 65,
                  'char' => 10,
                ),
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 66,
              'char' => 13,
            ),
            1 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'flush',
                'call-type' => 1,
                'file' => '/root/myzephir/mvc/mvc/controller.zep',
                'line' => 66,
                'char' => 16,
              ),
              'file' => '/root/myzephir/mvc/mvc/controller.zep',
              'line' => 67,
              'char' => 2,
            ),
          ),
          'file' => '/root/myzephir/mvc/mvc/controller.zep',
          'line' => 69,
          'char' => 1,
        ),
      ),
      'file' => '/root/myzephir/mvc/mvc/controller.zep',
      'line' => 69,
      'char' => 1,
    ),
    'file' => '/root/myzephir/mvc/mvc/controller.zep',
    'line' => 70,
    'char' => 0,
  ),
);