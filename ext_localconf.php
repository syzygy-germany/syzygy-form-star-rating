<?php
defined('TYPO3_MODE') or die();

(function ($extKey) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:form/Resources/Private/Language/Database.xlf'][] = 'EXT:' . $extKey . '/Resources/Private/Language/Backend.xlf';
})('syzygy_form_star_rating');
