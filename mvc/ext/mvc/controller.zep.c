
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
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/require.h"
#include "kernel/fcall.h"
#include "kernel/hash.h"
#include "kernel/array.h"
#include "kernel/concat.h"
#include "kernel/string.h"
#include "kernel/file.h"

ZEPHIR_INIT_CLASS(Mvc_Controller) {

	ZEPHIR_REGISTER_CLASS(Mvc, Controller, mvc, controller, mvc_controller_method_entry, 0);

	zend_declare_property_string(mvc_controller_ce, SL("tplpath"), "", ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(mvc_controller_ce, SL("dataConfig"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(mvc_controller_ce, SL("data"), ZEND_ACC_PUBLIC TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Mvc_Controller, __construct) {

	zval *_0;

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(_0);
	array_init(_0);
	zephir_update_property_this(this_ptr, SL("dataConfig"), _0 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Controller, run) {



}

PHP_METHOD(Mvc_Controller, renderPage) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *page, *_0, *_1 = NULL, *child = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &page);



	ZEPHIR_OBS_VAR(_0);
	zephir_read_property(&_0, page, SL("isSkeleton"), PH_NOISY_CC);
	if (zephir_is_true(_0)) {
		ZEPHIR_OBS_VAR(_1);
		zephir_read_property(&_1, page, SL("tpl"), PH_NOISY_CC);
		if (zephir_require_zval(_1 TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
	}
	ZEPHIR_OBS_NVAR(_1);
	zephir_read_property(&_1, page, SL("child"), PH_NOISY_CC);
	if (ZEPHIR_IS_EMPTY(_1)) {
		RETURN_MM_BOOL(0);
	}
	ZEPHIR_OBS_NVAR(_1);
	zephir_read_property(&_1, page, SL("child"), PH_NOISY_CC);
	ZEPHIR_CPY_WRT(child, _1);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "renderpl", NULL, child);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Controller, renderpl) {

	zephir_fcall_cache_entry *_12 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_3 = NULL, *_5 = NULL, *_6 = NULL;
	HashTable *_1;
	HashPosition _0;
	zval *child_param = NULL, *pl = NULL, *pltemplate = NULL, *html = NULL, *fun = NULL, *jsonvalue = NULL, **_2, *_4 = NULL, *_7 = NULL, *_8 = NULL, *_9, *_10 = NULL, *_11 = NULL;
	zval *child = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &child_param);

	zephir_get_arrval(child, child_param);


	zephir_is_iterable(child, &_1, &_0, 0, 0, "mvc/controller.zep", 51);
	for (
	  ; zephir_hash_get_current_data_ex(_1, (void**) &_2, &_0) == SUCCESS
	  ; zephir_hash_move_forward_ex(_1, &_0)
	) {
		ZEPHIR_GET_HMKEY(pl, _1, _0);
		ZEPHIR_GET_HVALUE(pltemplate, _2);
		ZEPHIR_CALL_FUNCTION(NULL, "ob_start", &_3);
		zephir_check_call_status();
		ZEPHIR_OBS_NVAR(_4);
		zephir_read_property(&_4, pltemplate, SL("tpl"), PH_NOISY_CC);
		if (zephir_require_zval(_4 TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
		ZEPHIR_CALL_FUNCTION(&html, "ob_get_contents", &_5);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(NULL, "ob_end_clean", &_6);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(jsonvalue);
		array_init(jsonvalue);
		ZEPHIR_OBS_NVAR(_7);
		zephir_read_property(&_7, pltemplate, SL("plconfig"), PH_NOISY_CC);
		ZEPHIR_OBS_NVAR(fun);
		zephir_array_fetch_string(&fun, _7, SL("fun"), PH_NOISY, "mvc/controller.zep", 41 TSRMLS_CC);
		ZEPHIR_OBS_NVAR(_8);
		zephir_read_property(&_8, pltemplate, SL("plconfig"), PH_NOISY_CC);
		zephir_array_fetch_string(&_9, _8, SL("domid"), PH_NOISY | PH_READONLY, "mvc/controller.zep", 43 TSRMLS_CC);
		zephir_array_update_string(&jsonvalue, SL("domid"), &_9, PH_COPY | PH_SEPARATE);
		zephir_array_update_string(&jsonvalue, SL("html"), &html, PH_COPY | PH_SEPARATE);
		ZEPHIR_INIT_NVAR(_10);
		zephir_json_encode(_10, &(_10), jsonvalue, 0  TSRMLS_CC);
		ZEPHIR_INIT_LNVAR(_11);
		ZEPHIR_CONCAT_SVSVSS(_11, "<script>", fun, "(", _10, ")", "</script>\r\n");
		zend_print_zval(_11, 0);
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "makeflush", &_12);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Controller, renderHtml) {

	zval *data_param = NULL, *_0, *_1;
	zval *data = NULL;

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &data_param);

	zephir_get_arrval(data, data_param);


	_0 = zephir_fetch_nproperty_this(this_ptr, SL("tplpath"), PH_NOISY_CC);
	if ((zephir_file_exists(_0 TSRMLS_CC) == SUCCESS)) {
		zephir_update_property_this(this_ptr, SL("data"), data TSRMLS_CC);
		_1 = zephir_fetch_nproperty_this(this_ptr, SL("tplpath"), PH_NOISY_CC);
		if (zephir_require_zval(_1 TSRMLS_CC) == FAILURE) {
			RETURN_MM_NULL();
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Controller, makeflush) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL, *_2 = NULL, *_3 = NULL;
	zval *_0 = NULL;

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_FUNCTION(&_0, "ob_get_level", &_1);
	zephir_check_call_status();
	if (zephir_is_true(_0)) {
		ZEPHIR_CALL_FUNCTION(NULL, "ob_flush", &_2);
		zephir_check_call_status();
	}
	ZEPHIR_CALL_FUNCTION(NULL, "flush", &_3);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

