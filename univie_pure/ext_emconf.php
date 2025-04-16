<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "univie_pure".
 *
 * Auto generated 16-04-2025 08:17
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'T3LUH FIS',
  'description' => 'This extension allows you to seamlessly integrate academic content from the Elsevier Pure Research Information System (API v524) into your TYPO3 website, displaying publications, projects, datasets, and equipment details. Based on the Vienna Pure extension, our implementation has been specifically optimized to meet the requirements of Leibniz University Hannover, while also being designed for global use and continuous improvement.',
  'category' => 'plugin',
  'version' => '12.1.524',
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
      'php' => '8.2.0-8.3.99',
      'typo3' => '12.0.0-12.99.99',
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

