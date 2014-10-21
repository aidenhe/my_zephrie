
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
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/operators.h"
#include "kernel/concat.h"
#include "kernel/require.h"
#include "kernel/string.h"
#include "kernel/file.h"


ZEPHIR_INIT_CLASS(Mvc_Applications) {

	ZEPHIR_REGISTER_CLASS(Mvc, Applications, mvc, applications, mvc_applications_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Mvc_Applications, router) {

	zval *config_param = NULL, *path, *serpath, *controller, *_SERVER, *_0 = NULL, *_1, *_2 = NULL, *_3, *_4, _5, _6, *_7, _8, _9;
	zval *config = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &config_param);

	zephir_get_arrval(config, config_param);


	zephir_get_global(&_SERVER, SS("_SERVER") TSRMLS_CC);
	ZEPHIR_OBS_VAR(serpath);
	zephir_array_fetch_string(&serpath, _SERVER, SL("REQUEST_URI"), PH_NOISY, "mvc/applications.zep", 11 TSRMLS_CC);
	if (ZEPHIR_IS_STRING(serpath, "/index.php")) {
		ZEPHIR_INIT_VAR(_0);
		ZEPHIR_GET_CONSTANT(_0, "CTR_PATH");
		zephir_array_fetch_string(&_1, config, SL("default_controller"), PH_NOISY | PH_READONLY, "mvc/applications.zep", 14 TSRMLS_CC);
		ZEPHIR_INIT_VAR(_2);
		ZEPHIR_CONCAT_VVS(_2, _0, _1, ".php");
		if (zephir_require_zval(_2 TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
		zephir_array_fetch_string(&_3, config, SL("default_controller"), PH_NOISY | PH_READONLY, "mvc/applications.zep", 15 TSRMLS_CC);
		RETURN_CTOR(_3);
	}
	ZEPHIR_INIT_NVAR(_0);
	ZEPHIR_INIT_VAR(_4);
	ZEPHIR_SINIT_VAR(_5);
	ZVAL_STRING(&_5, "/index.php/", 0);
	ZEPHIR_SINIT_VAR(_6);
	ZVAL_STRING(&_6, "", 0);
	zephir_fast_str_replace(_4, &_5, &_6, serpath);
	zephir_fast_explode_str(_0, SL("?"), _4, LONG_MAX TSRMLS_CC);
	ZEPHIR_OBS_VAR(controller);
	zephir_array_fetch_long(&controller, _0, 0, PH_NOISY, "mvc/applications.zep", 18 TSRMLS_CC);
	ZEPHIR_INIT_VAR(_7);
	ZEPHIR_GET_CONSTANT(_7, "CTR_PATH");
	ZEPHIR_INIT_VAR(path);
	ZEPHIR_CONCAT_VVS(path, _7, controller, ".php");
	if ((zephir_file_exists(path TSRMLS_CC) == SUCCESS)) {
		if (zephir_require_zval(path TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
		ZEPHIR_SINIT_VAR(_8);
		ZVAL_STRING(&_8, "/", 0);
		ZEPHIR_SINIT_VAR(_9);
		ZVAL_STRING(&_9, "_", 0);
		zephir_fast_str_replace(return_value, &_8, &_9, controller);
		RETURN_MM();
	} else {
		ZEPHIR_INIT_NVAR(_0);
		ZEPHIR_GET_CONSTANT(_0, "CTR_PATH");
		zephir_array_fetch_string(&_1, config, SL("404_controller"), PH_NOISY | PH_READONLY, "mvc/applications.zep", 24 TSRMLS_CC);
		ZEPHIR_INIT_LNVAR(_2);
		ZEPHIR_CONCAT_VVS(_2, _0, _1, ".php");
		if (zephir_require_zval(_2 TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
		zephir_array_fetch_string(&_3, config, SL("404_controller"), PH_NOISY | PH_READONLY, "mvc/applications.zep", 25 TSRMLS_CC);
		RETURN_CTOR(_3);
	}
	ZEPHIR_MM_RESTORE();

}

