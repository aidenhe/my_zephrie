
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_MVC_H
#define PHP_MVC_H 1

#define ZEPHIR_RELEASE 1

#include "kernel/globals.h"

#define PHP_MVC_NAME        "mvc"
#define PHP_MVC_VERSION     "0.0.1"
#define PHP_MVC_EXTNAME     "mvc"
#define PHP_MVC_AUTHOR      ""
#define PHP_MVC_ZEPVERSION  "0.4.5a"
#define PHP_MVC_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(mvc)

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	/* Max recursion control */
	unsigned int recursive_lock;

	/* Global constants */
	zval *global_true;
	zval *global_false;
	zval *global_null;
	
ZEND_END_MODULE_GLOBALS(mvc)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(mvc)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) TSRMG(mvc_globals_id, zend_mvc_globals *, v)
#else
	#define ZEPHIR_GLOBAL(v) (mvc_globals.v)
#endif

#ifdef ZTS
	#define ZEPHIR_VGLOBAL ((zend_mvc_globals *) (*((void ***) tsrm_ls))[TSRM_UNSHUFFLE_RSRC_ID(mvc_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(mvc_globals)
#endif

#define zephir_globals_def mvc_globals
#define zend_zephir_globals_def zend_mvc_globals

extern zend_module_entry mvc_module_entry;
#define phpext_mvc_ptr &mvc_module_entry

#endif
