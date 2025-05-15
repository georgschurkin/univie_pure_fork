<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "univie_pure".
 *
 * Auto generated 08-05-2025 16:41
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Fork from univie_pure extension',
  'description' => 'This extension allows you to seamlessly integrate academic content from the Elsevier Pure Research Information System (API v524) into your TYPO3 website, displaying publications, projects, datasets, and equipment details. Based on the Vienna Pure extension, our implementation has been specifically optimized to meet the requirements of Leibniz University Hannover, while also being designed for global use and continuous improvement.',
  'category' => 'plugin',
  'version' => '11.0.0',
  'state' => 'beta',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'TYPO3-Team LUIS LUH',
  'author_email' => 'typo3@luis.uni-hannover.de',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.4.0-8.3.99',
      'typo3' => '11.0.0-11.99.99',
      'numbered_pagination' => '2.0.1-2.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

