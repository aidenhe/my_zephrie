
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
#include "kernel/object.h"
#include "kernel/fcall.h"
#include "kernel/string.h"
#include "kernel/operators.h"
#include "kernel/hash.h"
#include "kernel/file.h"
#include "kernel/array.h"


ZEPHIR_INIT_CLASS(Mvc_Bigpipe) {

	ZEPHIR_REGISTER_CLASS(Mvc, Bigpipe, mvc, bigpipe, mvc_bigpipe_method_entry, 0);

	zend_declare_property_null(mvc_bigpipe_ce, SL("tplpath"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(mvc_bigpipe_ce, SL("tpl"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_bool(mvc_bigpipe_ce, SL("isSkeleton"), 0, ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(mvc_bigpipe_ce, SL("child"), ZEND_ACC_PUBLIC TSRMLS_CC);

	zend_declare_property_null(mvc_bigpipe_ce, SL("pageletData"), ZEND_ACC_PUBLIC TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Mvc_Bigpipe, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *_0, *_1, *_2;

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(_0);
	ZEPHIR_GET_CONSTANT(_0, "APP_PATH");
	_1 = zephir_fetch_nproperty_this(this_ptr, SL("tpl"), PH_NOISY_CC);
	ZEPHIR_INIT_VAR(_2);
	ZEPHIR_CONCAT_VSV(_2, _0, "/", _1);
	zephir_update_property_this(this_ptr, SL("tpl"), _2 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "render", NULL);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Bigpipe, prepareData) {



}

PHP_METHOD(Mvc_Bigpipe, getJson) {

	int ZEPHIR_LAST_CALL_STATUS;
	zephir_nts_static zephir_fcall_cache_entry *_4 = NULL;
	zval *_0, *_1, *_2, *_3 = NULL;

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(_0);
	ZEPHIR_GET_CONSTANT(_0, "APP_PATH");
	_1 = zephir_fetch_nproperty_this(this_ptr, SL("tplpath"), PH_NOISY_CC);
	ZEPHIR_INIT_VAR(_2);
	ZEPHIR_CONCAT_VSVS(_2, _0, "/", _1, "page_config.json");
	ZEPHIR_CALL_FUNCTION(&_3, "file_get_contents", &_4, _2, ZEPHIR_GLOBAL(global_true));
	zephir_check_call_status();
	zephir_json_decode(return_value, &(return_value), _3, 0  TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Mvc_Bigpipe, render) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *_0 = NULL, *_1;

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_METHOD(&_0, this_ptr, "preparedata",  NULL);
	zephir_check_call_status();
	zephir_update_property_this(this_ptr, SL("pageletData"), _0 TSRMLS_CC);
	_1 = zephir_fetch_nproperty_this(this_ptr, SL("isSkeleton"), PH_NOISY_CC);
	if (zephir_is_true(_1)) {
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "_renderpage", NULL);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Mvc_Bigpipe, _renderPage) {

	HashTable *_3;
	HashPosition _2;
	zephir_nts_static zephir_fcall_cache_entry *_1 = NULL;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *jsonconfig = NULL, *_0 = NULL, *plid = NULL, *pl = NULL, *pagelet = NULL, *plclass = NULL, **_4, *_5 = NULL, *_6 = NULL, _7 = zval_used_for_init, _8 = zval_used_for_init, *_9 = NULL, *_10 = NULL, *childobject = NULL, *plconfig = NULL, *_11;

	ZEPHIR_MM_GROW();

	ZEPHIR_CALL_METHOD(&_0, this_ptr, "getjson",  NULL);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&jsonconfig, "get_object_vars", &_1, _0);
	zephir_check_call_status();
	zephir_is_iterable(jsonconfig, &_3, &_2, 0, 0, "mvc/bigpipe.zep", 70);
	for (
	  ; zephir_hash_get_current_data_ex(_3, (void**) &_4, &_2) == SUCCESS
	  ; zephir_hash_move_forward_ex(_3, &_2)
	) {
		ZEPHIR_GET_HMKEY(plid, _3, _2);
		ZEPHIR_GET_HVALUE(pl, _4);
		ZEPHIR_INIT_NVAR(plclass);
		ZEPHIR_CONCAT_SSV(plclass, "new", " ", plid);
		ZEPHIR_INIT_NVAR(_5);
		ZEPHIR_GET_CONSTANT(_5, "LIB_PATH");
		ZEPHIR_INIT_NVAR(_6);
		ZEPHIR_SINIT_NVAR(_7);
		ZVAL_STRING(&_7, "_", 0);
		ZEPHIR_SINIT_NVAR(_8);
		ZVAL_STRING(&_8, "/", 0);
		zephir_fast_str_replace(_6, &_7, &_8, plid);
		ZEPHIR_INIT_NVAR(pagelet);
		ZEPHIR_CONCAT_VVS(pagelet, _5, _6, ".php");
		if ((zephir_file_exists(pagelet TSRMLS_CC) == SUCCESS)) {
			ZEPHIR_INIT_NVAR(_9);
			zephir_eval_php(plclass, _9, "/root/myzephir/mvc/mvc/bigpipe.zep:59" TSRMLS_CC);
			zephir_update_property_array(this_ptr, SL("child"), plid, _9 TSRMLS_CC);
		} else {
			ZEPHIR_INIT_LNVAR(_10);
			ZEPHIR_CONCAT_VS(_10, pagelet, "REQUIRE ERROR");
			zend_print_zval(_10, 0);
		}
		ZEPHIR_CALL_FUNCTION(&plconfig, "get_object_vars", &_1, pl);
		zephir_check_call_status();
		_11 = zephir_fetch_nproperty_this(this_ptr, SL("child"), PH_NOISY_CC);
		ZEPHIR_OBS_NVAR(childobject);
		zephir_array_fetch(&childobject, _11, plid, PH_NOISY, "mvc/bigpipe.zep", 66 TSRMLS_CC);
		zephir_update_property_zval(childobject, SL("plconfig"), plconfig TSRMLS_CC);
	}
	ZEPHIR_MM_RESTORE();

}

