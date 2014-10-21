
extern zend_class_entry *mvc_bigpipe_ce;

ZEPHIR_INIT_CLASS(Mvc_Bigpipe);

PHP_METHOD(Mvc_Bigpipe, __construct);
PHP_METHOD(Mvc_Bigpipe, prepareData);
PHP_METHOD(Mvc_Bigpipe, getJson);
PHP_METHOD(Mvc_Bigpipe, render);
PHP_METHOD(Mvc_Bigpipe, _renderPage);

ZEPHIR_INIT_FUNCS(mvc_bigpipe_method_entry) {
	PHP_ME(Mvc_Bigpipe, __construct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Mvc_Bigpipe, prepareData, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Bigpipe, getJson, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Bigpipe, render, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Bigpipe, _renderPage, NULL, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
