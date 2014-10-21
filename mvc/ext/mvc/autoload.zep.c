
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/concat.h"
#include "kernel/memory.h"
#include "kernel/string.h"
#include "kernel/file.h"
#include "kernel/require.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/fcall.h"


ZEPHIR_INIT_CLASS(Mvc_Autoload) {

	ZEPHIR_REGISTER_CLASS(Mvc, Autoload, mvc, autoload, mvc_autoload_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Mvc_Autoload, load) {

	zval *model_param = NULL, *modelpath, *_0, *_1, _2, _3, *_4;
	zval *model = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &model_param);

	zephir_get_strval(model, model_param);


	ZEPHIR_INIT_VAR(_0);
	ZEPHIR_GET_CONSTANT(_0, "LIB_PATH");
	ZEPHIR_INIT_VAR(_1);
	ZEPHIR_SINIT_VAR(_2);
	ZVAL_STRING(&_2, "_", 0);
	ZEPHIR_SINIT_VAR(_3);
	ZVAL_STRING(&_3, "/", 0);
	zephir_fast_str_replace(_1, &_2, &_3, model);
	ZEPHIR_INIT_VAR(modelpath);
	ZEPHIR_CONCAT_VVS(modelpath, _0, _1, ".php");
	if ((zephir_file_exists(modelpath TSRMLS_CC) == SUCCESS)) {
		if (zephir_require_zval(modelpath TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
	} else {
		ZEPHIR_INIT_VAR(_4);
		ZEPHIR_CONCAT_VSS(_4, modelpath, "\r", "ERROR");
		zend_print_zval(_4, 0);
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Autoload, register) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *_0;
	zval *loader, *_1;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &loader);



	ZEPHIR_INIT_VAR(_0);
	array_init_size(_0, 3);
	zephir_array_fast_append(_0, loader);
	ZEPHIR_INIT_VAR(_1);
	ZVAL_STRING(_1, "load", 1);
	zephir_array_fast_append(_0, _1);
	ZEPHIR_CALL_FUNCTION(NULL, "spl_autoload_register", NULL, _0);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

