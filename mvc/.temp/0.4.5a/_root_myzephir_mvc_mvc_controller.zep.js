[ { "type": "namespace", "name": "Mvc", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 3, "char": 5 }, { "type": "class", "name": "Controller", "abstract": 0, "final": 0, "definition": { "properties": [ { "visibility": [ "public" ], "type": "property", "name": "tplpath", "default": { "type": "string", "value": "", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 5, "char": 21 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 6, "char": 7 }, { "visibility": [ "public" ], "type": "property", "name": "dataConfig", "default": { "type": "empty-array", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 6, "char": 24 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 7, "char": 7 }, { "visibility": [ "public" ], "type": "property", "name": "data", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 9, "char": 7 } ], "methods": [ { "visibility": [ "public" ], "type": "method", "name": "__construct", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 13, "char": 7 }, { "visibility": [ "public" ], "type": "method", "name": "run", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 17, "char": 7 }, { "visibility": [ "public" ], "type": "method", "name": "renderPage", "parameters": [ { "type": "parameter", "name": "page", "const": 0, "data-type": "object", "mandatory": 0, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 17, "char": 40 } ], "statements": [ { "type": "if", "expr": { "type": "property-access", "left": { "type": "variable", "value": "page", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 19, "char": 11 }, "right": { "type": "variable", "value": "isSkeleton", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 19, "char": 23 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 19, "char": 23 }, "statements": [ { "type": "require", "expr": { "type": "property-access", "left": { "type": "variable", "value": "page", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 20, "char": 17 }, "right": { "type": "variable", "value": "tpl", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 20, "char": 21 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 20, "char": 21 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 21, "char": 3 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 23, "char": 4 }, { "type": "if", "expr": { "type": "empty", "left": { "type": "list", "left": { "type": "property-access", "left": { "type": "variable", "value": "page", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 23, "char": 17 }, "right": { "type": "variable", "value": "child", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 23, "char": 23 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 23, "char": 23 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 23, "char": 24 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 23, "char": 24 }, "statements": [ { "type": "return", "expr": { "type": "bool", "value": "false", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 24, "char": 16 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 25, "char": 3 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 26, "char": 5 }, { "type": "declare", "data-type": "variable", "variables": [ { "variable": "child", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 26, "char": 12 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 27, "char": 5 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "child", "expr": { "type": "property-access", "left": { "type": "variable", "value": "page", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 27, "char": 20 }, "right": { "type": "variable", "value": "child", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 27, "char": 26 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 27, "char": 26 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 27, "char": 26 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 28, "char": 6 }, { "type": "mcall", "expr": { "type": "mcall", "variable": { "type": "variable", "value": "this", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 28, "char": 8 }, "name": "renderpl", "call-type": 1, "parameters": [ { "parameter": { "type": "variable", "value": "child", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 28, "char": 23 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 28, "char": 23 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 28, "char": 24 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 29, "char": 2 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 31, "char": 7 }, { "visibility": [ "public" ], "type": "method", "name": "renderpl", "parameters": [ { "type": "parameter", "name": "child", "const": 0, "data-type": "array", "mandatory": 0, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 31, "char": 38 } ], "statements": [ { "type": "declare", "data-type": "variable", "variables": [ { "variable": "pl", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 9 }, { "variable": "pltemplate", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 21 }, { "variable": "key", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 26 }, { "variable": "value", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 33 }, { "variable": "html", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 38 }, { "variable": "fun", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 42 }, { "variable": "jsonvalue", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 33, "char": 52 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 35, "char": 5 }, { "type": "for", "expr": { "type": "variable", "value": "child", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 35, "char": 30 }, "key": "pl", "value": "pltemplate", "reverse": 0, "statements": [ { "type": "fcall", "expr": { "type": "fcall", "name": "ob_start", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 36, "char": 14 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 37, "char": 10 }, { "type": "require", "expr": { "type": "property-access", "left": { "type": "variable", "value": "pltemplate", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 37, "char": 23 }, "right": { "type": "variable", "value": "tpl", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 37, "char": 27 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 37, "char": 27 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 38, "char": 6 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "html", "expr": { "type": "fcall", "name": "ob_get_contents", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 38, "char": 32 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 38, "char": 32 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 39, "char": 15 }, { "type": "fcall", "expr": { "type": "fcall", "name": "ob_end_clean", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 39, "char": 18 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 40, "char": 6 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "jsonvalue", "expr": { "type": "empty-array", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 40, "char": 22 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 40, "char": 22 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 6 }, { "type": "let", "assignments": [ { "assign-type": "variable", "operator": "assign", "variable": "fun", "expr": { "type": "array-access", "left": { "type": "property-access", "left": { "type": "variable", "value": "pltemplate", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 25 }, "right": { "type": "variable", "value": "plconfig", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 34 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 34 }, "right": { "type": "string", "value": "fun", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 40 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 41 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 41, "char": 41 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 6 }, { "type": "let", "assignments": [ { "assign-type": "array-index", "operator": "assign", "variable": "jsonvalue", "index-expr": [ { "type": "string", "value": "domid", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 25 } ], "expr": { "type": "array-access", "left": { "type": "property-access", "left": { "type": "variable", "value": "pltemplate", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 40 }, "right": { "type": "variable", "value": "plconfig", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 49 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 49 }, "right": { "type": "string", "value": "domid", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 57 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 58 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 43, "char": 58 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 44, "char": 6 }, { "type": "let", "assignments": [ { "assign-type": "array-index", "operator": "assign", "variable": "jsonvalue", "index-expr": [ { "type": "string", "value": "html", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 44, "char": 24 } ], "expr": { "type": "variable", "value": "html", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 44, "char": 32 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 44, "char": 32 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 7 }, { "type": "echo", "expressions": [ { "type": "concat", "left": { "type": "concat", "left": { "type": "concat", "left": { "type": "concat", "left": { "type": "concat", "left": { "type": "string", "value": "<script>", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 20 }, "right": { "type": "variable", "value": "fun", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 26 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 26 }, "right": { "type": "string", "value": "(", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 32 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 32 }, "right": { "type": "fcall", "name": "json_encode", "call-type": 1, "parameters": [ { "parameter": { "type": "variable", "value": "jsonvalue", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 55 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 55 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 57 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 57 }, "right": { "type": "string", "value": ")", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 63 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 63 }, "right": { "type": "string", "value": "<\/script>\\r\\n", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 80 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 46, "char": 80 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 47, "char": 7 }, { "type": "mcall", "expr": { "type": "mcall", "variable": { "type": "variable", "value": "this", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 47, "char": 9 }, "name": "makeflush", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 47, "char": 21 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 49, "char": 3 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 51, "char": 2 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 53, "char": 7 }, { "visibility": [ "public" ], "type": "method", "name": "renderHtml", "parameters": [ { "type": "parameter", "name": "data", "const": 0, "data-type": "array", "mandatory": 0, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 53, "char": 39 } ], "statements": [ { "type": "if", "expr": { "type": "fcall", "name": "file_exists", "call-type": 1, "parameters": [ { "parameter": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 54, "char": 23 }, "right": { "type": "variable", "value": "tplpath", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 54, "char": 31 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 54, "char": 31 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 54, "char": 31 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 54, "char": 33 }, "statements": [ { "type": "let", "assignments": [ { "assign-type": "object-property", "operator": "assign", "variable": "this", "property": "data", "expr": { "type": "variable", "value": "data", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 55, "char": 25 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 55, "char": 25 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 56, "char": 10 }, { "type": "require", "expr": { "type": "property-access", "left": { "type": "variable", "value": "this", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 56, "char": 17 }, "right": { "type": "variable", "value": "tplpath", "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 56, "char": 25 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 56, "char": 25 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 58, "char": 3 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 59, "char": 2 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 61, "char": 7 }, { "visibility": [ "public" ], "type": "method", "name": "makeflush", "statements": [ { "type": "if", "expr": { "type": "fcall", "name": "ob_get_level", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 63, "char": 21 }, "statements": [ { "type": "fcall", "expr": { "type": "fcall", "name": "ob_flush", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 64, "char": 25 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 65, "char": 10 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 66, "char": 13 }, { "type": "fcall", "expr": { "type": "fcall", "name": "flush", "call-type": 1, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 66, "char": 16 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 67, "char": 2 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 69, "char": 1 } ], "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 69, "char": 1 }, "file": "\/root\/myzephir\/mvc\/mvc\/controller.zep", "line": 70, "char": 0 } ]