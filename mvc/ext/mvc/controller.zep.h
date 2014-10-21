
extern zend_class_entry *mvc_controller_ce;

ZEPHIR_INIT_CLASS(Mvc_Controller);

PHP_METHOD(Mvc_Controller, __construct);
PHP_METHOD(Mvc_Controller, run);
PHP_METHOD(Mvc_Controller, renderPage);
PHP_METHOD(Mvc_Controller, renderpl);
PHP_METHOD(Mvc_Controller, renderHtml);
PHP_METHOD(Mvc_Controller, makeflush);

ZEND_BEGIN_ARG_INFO_EX(arginfo_mvc_controller_renderpage, 0, 0, 1)
	ZEND_ARG_INFO(0, page)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_mvc_controller_renderpl, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, child, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_mvc_controller_renderhtml, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, data, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(mvc_controller_method_entry) {
	PHP_ME(Mvc_Controller, __construct, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Mvc_Controller, run, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Controller, renderPage, arginfo_mvc_controller_renderpage, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Controller, renderpl, arginfo_mvc_controller_renderpl, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Controller, renderHtml, arginfo_mvc_controller_renderhtml, ZEND_ACC_PUBLIC)
	PHP_ME(Mvc_Controller, makeflush, NULL, ZEND_ACC_PUBLIC)
  PHP_FE_END
};
