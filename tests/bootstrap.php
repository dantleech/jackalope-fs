<?php
/** make sure we get ALL infos from php */
error_reporting(E_ALL | E_STRICT);

/**
 * Sample bootstrap file
 *
 * the thing you MUST do is define the constants as expected in the
 * 04_Connecting/RepositoryDescriptorsTest.php
 *
 * Otherwise you may use this file to register autoloaders or require files
 * to have your implementation be ready.
 *
 * Have a look at the Jackalope repository for an example how the tests are
 * integrated https://github.com/jackalope/jackalope
 */

/*
 * you need to define the following constants for the repository descriptor test for JCR 1.0/JSR-170 and JSR-283 specs
 */

dodefine('SPEC_VERSION_DESC', 'jcr.specification.version');
dodefine('SPEC_NAME_DESC', 'jcr.specification.name');
dodefine('REP_VENDOR_DESC', 'jcr.repository.vendor');
dodefine('REP_VENDOR_URL_DESC', 'jcr.repository.vendor.url');
dodefine('REP_NAME_DESC', 'jcr.repository.name');
dodefine('REP_VERSION_DESC', 'jcr.repository.version');
dodefine('LEVEL_1_SUPPORTED', 'level.1.supported');
dodefine('LEVEL_2_SUPPORTED', 'level.2.supported');
dodefine('OPTION_TRANSACTIONS_SUPPORTED', 'option.transactions.supported');
dodefine('OPTION_VERSIONING_SUPPORTED', 'option.versioning.supported');
dodefine('OPTION_OBSERVATION_SUPPORTED', 'option.observation.supported');
dodefine('OPTION_LOCKING_SUPPORTED', 'option.locking.supported');
dodefine('OPTION_QUERY_SQL_SUPPORTED', 'option.query.sql.supported');
dodefine('QUERY_XPATH_POS_INDEX', 'query.xpath.pos.index');
dodefine('QUERY_XPATH_DOC_ORDER', 'query.xpath.doc.order');

require_once(__DIR__ . '/../vendor/autoload.php');
require_once __DIR__ . '/../vendor/phpcr/phpcr-api-tests/inc/AbstractLoader.php';
require_once __DIR__ . '/../vendor/phpcr/phpcr-api-tests/inc/FixtureLoaderInterface.php';
require_once __DIR__ . '/ImplementationLoader.php';
require_once __DIR__ . '/Transport/Fs/FunctionalTestCase.php';
require_once __DIR__ . '/Transport/Fs/Filesystem/Adapter/AdapterTestCase.php';
require_once __DIR__ . '/Transport/Fs/Search/Adapter/AdapterTestCase.php';

function dodefine($name, $value)
{
    if (!defined($name)) {
        define($name, $value);
    }
}

