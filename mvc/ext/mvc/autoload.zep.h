
extern zend_class_entry *mvc_autoload_ce;

ZEPHIR_INIT_CLASS(Mvc_Autoload);

PHP_METHOD(Mvc_Autoload, load);
PHP_METHOD(Mvc_Autoload, register);

ZEND_BEGIN_ARG_INFO_EX(arginfo_mvc_autoload_load, 0, 0, 1)
	ZEND_ARG_INFO(0, model)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_mvc_autoload_register, 0, 0, 1)
	ZEND_ARG_INFO(0, loader)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(mvc_autoload_method_entry) {
	PHP_ME(Mvc_Autoload, load, arginfo_mvc_autoload_load, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Mvc_Autoload, register, arginfo_mvc_autoload_register, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
  PHP_FE_END
};
