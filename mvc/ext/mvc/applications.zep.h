
extern zend_class_entry *mvc_applications_ce;

ZEPHIR_INIT_CLASS(Mvc_Applications);

PHP_METHOD(Mvc_Applications, router);

ZEND_BEGIN_ARG_INFO_EX(arginfo_mvc_applications_router, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, config, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(mvc_applications_method_entry) {
	PHP_ME(Mvc_Applications, router, arginfo_mvc_applications_router, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
  PHP_FE_END
};
