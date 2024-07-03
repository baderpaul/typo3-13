<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$packageKey = "setup_package";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['overrideSharedFields'] = true;

/***************
 * overrite default news files
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:news/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/News/locallang.xlf";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/News/de.locallang.xlf";

/***************
 * ke_search
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:ke_search/Resources/Private/Language/locallang_searchbox.xlf'][] = "EXT:$packageKey/Resources/Private/Language/KeSearch/locallang_searchbox.xml";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:ke_search/Resources/Private/Language/locallang_resultlist.xlf'][] = "EXT:$packageKey/Resources/Private/Language/KeSearch/locallang_resultlist.xml";

/***************
 * overrite default cookie consent files
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:mindshape_cookie_consent/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/CookieConsent/locallang.xlf";
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:mindshape_cookie_consent/Resources/Private/Language/locallang.xlf'][] = "EXT:$packageKey/Resources/Private/Language/CookieConsent/de.locallang.xlf";

/***************
 * add custom RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = "EXT:$packageKey/Configuration/Yaml/RTE/custom.yaml";
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['mask'] = "EXT:$packageKey/Configuration/Yaml/RTE/mask.yaml";
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['news'] = "EXT:$packageKey/Configuration/Yaml/RTE/news.yaml";

/***************
 * extend css for CkEditor backend
 */
$GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['setup_package']  = "EXT:$packageKey/Resources/Public/Styles/Backend/";

/***************
 * BE setup for form
*/
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    trim('
        module.tx_form {
        settings {
            yamlConfigurations {
                100 = EXT:setup_package/Configuration/Yaml/FormDefinition/DefaultFormConfiguration.yaml
                }
            }
        }
    ')
);