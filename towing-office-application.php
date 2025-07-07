
<?php

/**
 * Template Name: Office Application
 * Version: 1.1
 * Description: A custom job application template for Wrecker Service.
 * Author: Duppins Technology
 * Author URI: https://duppinstech.com
 * Group: Wrecker
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: job, employment, application
 */

/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
  return;
}

/**
* All Gravity PDF v4/v5/v6 templates have access to the following variables:
*
* @var array  $form      The current Gravity Forms array
* @var array  $entry     The raw entry data
* @var array  $form_data The processed entry data stored in an array
* @var object $settings  The current PDF configuration
* @var array  $fields    An array of Gravity Forms fields which can be accessed with their ID number
* @var array  $config    The initialised template config class – eg. /config/zadani.php
*/

$firstName = $form_data['field'][1]['first'] ?? '';
$middleName = $form_data['field'][1]['middle'] ?? '';
$lastName = $form_data['field'][1]['last'] ?? '';
$fullName = $firstName;
if ( $middleName != '' ) {
    $fullName = $fullName . ' ' . $middleName;
}
$fullName = $fullName . ' ' . $lastName;
$legalName = $lastName . ', ' . $firstName;
if (!empty($middleName)) {
    // Extract first character of middle name, uppercase it
    $middleInitial = strtoupper(substr(trim($middleName), 0, 1));
    $legalName .= ', ' . $middleInitial . '.';
}
$email = $form_data['field'][3] ?? '';
$maidenName = $form_data['field'][142] ?? '';
$ssn = $form_data['field'][145] ?? '';
$gender = $form_data['field'][143] ?? '';
$race = $form_data['field'][144] ?? '';
$dob = $form_data['field'][146] ?? '';

$AddrSt1 = $form_data['field'][4]['street'] ?? '';
$AddrSt2 = $form_data['field'][4]['street2'] ?? '';
$AddrCty = $form_data['field'][4]['city'] ?? '';
$AddrState = $form_data['field'][4]['state'] ?? '';
$AddrZip = $form_data['field'][4]['zip'] ?? '';
$fullAddress = $AddrSt1;
if ( $AddrSt2 != '' ) {
    $fullAddress = $fullAddress . ', ' . $AddrSt2;
}
$fullAddress = $fullAddress . ', ' . $AddrState . ' ' . $AddrZip;

$homeTel = $form_data['field'][5] ?? '';
$workTel = $form_data['field'][6] ?? '';
$workCtc = $form_data['field'][7] ?? '';
$cellTel = $form_data['field'][8] ?? '';

$position = $form_data['field'][9] ?? '';
$availFTPT = $form_data['field'][114] ?? '';
foreach( (array) $availFTPT as $item ) {
    switch( $item ) {
      case 'Full-time':
          $availFullTime = 'Full-time';
      break;
     
      case 'Part-time':
          $availPartTime = 'Part-time';
      break;
      
      case 'Seasonal':
          $availSeasonal = 'Seasonal';
      break;
    }
}
$rate = $form_data['field'][11] ?? '';
$startDate = $form_data['field'][13] ?? '';
$availMAEW = $form_data['field'][115] ?? '';
foreach( (array) $availMAEW as $item ) {
    switch( $item ) {
      case 'Morning':
          $availMorning = true;
      break;
     
      case 'Afternoon':
          $availAfternoon = true;
      break;
      
      case 'Evening':
          $availEvening = true;
      break;
      
      case 'Weekends':
          $availWeekends = true;
      break;
    }
}
$age = $form_data['field'][15] ?? '';
$legal = $form_data['field'][16] ?? '';
$altName = $form_data['field'][17] ?? '';
$altNameList = $form_data['field'][18] ?? '';
$prevWork = $form_data['field'][21] ?? '';
$prevWorkMY = $form_data['field'][23] ?? '';
$friends = $form_data['field'][20] ?? '';
$friendsName = $form_data['field'][22] ?? '';
$findOut = $form_data['field'][19] ?? '';

$highSchool = $form_data['field'][28] ?? '';
$highSchoolLoc = $form_data['field'][29] ?? '';
$highSchoolGrad = $form_data['field'][30] ?? '';

$postEd1 = $form_data['list'][31][0]['Name &amp; Location of School (City &amp; State)'] ?? '';
$postEd1Grad = $form_data['list'][31][0]['Graduated?'] ?? '';
$postEd1Deg = $form_data['list'][31][0]['Degree/Diploma'] ?? '';
$postEd1Course = $form_data['list'][31][0]['Course of Study'] ?? '';

$skils = $form_data['field'][32] ?? '';
foreach( (array) $skils as $item ) {
    switch( $item ) {
      case 'Word Processing Skills':
          $skillsWord = true;
      break;
     
      case 'Spreadsheet Skills':
          $skillsSpreadsheet = true;
      break;
      
      case 'Database Skills':
          $skillsDatabase = true;
      break;
      
      case 'Office Equipment Operation':
          $skillsOffice = true;
      break;
      
      case 'Supervisory Skills':
          $skillsSupervisor = true;
      break;
      
      case 'Project management skills':
          $skillsProject = true;
      break;
      
      case 'Other (please list):':
          $skillsOther = true;
      break;
    }
}
$skilsOtherList = $form_data['field'][34] ?? '';
// Check if the text contains bullets (starts with "•")
if (preg_match('/^\s*•/', $skilsOtherList)) {
    // Handle bulleted lists
    $listItems = preg_split('/<br\s*\/?>/', $skilsOtherList); // Split by <br /> or <br>
    $listItems = array_map('trim', $skilsOtherList); // Remove extra spaces from each line
    
    // Build the <ul> HTML
    $skilsOtherList = '<ul>';
    foreach ($listItems as $item) {
        if (!empty($item)) {
            // Remove the leading bullet and any space after it
            $cleanItem = preg_replace('/^\s*•\s*/', '', $item);
            $skilsOtherList .= '<li>' . esc_html($cleanItem) . '</li>';
        }
    }
    $skilsOtherList .= '</ul>';
} else {
    // Handle plain text with line breaks
    echo nl2br(esc_html($skilsOtherList));
}

$emp1DtFrom = $form_data['field'][168] ?? '';
$emp1DtTo = $form_data['field'][169] ?? '';
$emp1Pos = $form_data['field'][45] ?? '';
$emp1Name = $form_data['field'][49] ?? '';
$emp1AddrSt1 = $form_data['field'][50]['street'] ?? '';
$emp1AddrSt2 = $form_data['field'][50]['street2'] ?? '';
$emp1AddrCity = $form_data['field'][50]['city'] ?? '';
$emp1AddrState = $form_data['field'][50]['state'] ?? '';
$emp1AddrZip = $form_data['field'][50]['zip'] ?? '';
$emp1AddrFull .= $emp1AddrSt1;
if ( !empty($emp1AddrSt2) ) {
    $emp1AddrFull .= ', ' . $emp1AddrSt2;
}
if ( !empty($emp1AddrSt1) ) {
    $emp1AddrFull .= ', ' . $emp1AddrState . ' ' . $emp1AddrZip;
}
$emp1WageSt = $form_data['field'][46] ?? '';
$emp1WageFl = $form_data['field'][48] ?? '';
$emp1Status = $form_data['field'][55] ?? '';
$emp1Hours = $form_data['field'][54] ?? '';
$emp1Super = $form_data['field'][51] ?? '';
$emp1Tel = $form_data['field'][52] ?? '';
$emp1Reason = $form_data['field'][53] ?? '';

$emp2DtFrom = $form_data['field'][170] ?? '';
$emp2DtTo = $form_data['field'][171] ?? '';
$emp2Pos = $form_data['field'][65] ?? '';
$emp2Name = $form_data['field'][63] ?? '';
$emp2AddrSt1 = $form_data['field'][62]['street'] ?? '';
$emp2AddrSt2 = $form_data['field'][62]['street2'] ?? '';
$emp2AddrCity = $form_data['field'][62]['city'] ?? '';
$emp2AddrState = $form_data['field'][62]['state'] ?? '';
$emp2AddrZip = $form_data['field'][62]['zip'] ?? '';
$emp2AddrFull = $emp1AddrSt1;
if ( !empty($emp2AddrSt2) ) {
    $emp2AddrFull .= ', ' . $emp2AddrSt2;
}
if ( !empty($emp2AddrSt1) ) {
    $emp2AddrFull .= ', ' . $emp2AddrState . ' ' . $emp2AddrZip;
}
$emp2WageSt = $form_data['field'][112] ?? '';
$emp2WageFl = $form_data['field'][113] ?? '';
$emp2Status = $form_data['field'][61] ?? '';
$emp2Hours = $form_data['field'][60] ?? '';
$emp2Super = $form_data['field'][59] ?? '';
$emp2Tel = $form_data['field'][58] ?? '';
$emp2Reason = $form_data['field'][57] ?? '';

$emp3DtFrom = $form_data['field'][172] ?? '';
$emp3DtTo = $form_data['field'][173] ?? '';
$emp3Pos = $form_data['field'][72] ?? '';
$emp3Name = $form_data['field'][73] ?? '';
$emp3AddrSt1 = $form_data['field'][74]['street'] ?? '';
$emp3AddrSt2 = $form_data['field'][74]['street2'] ?? '';
$emp3AddrCity = $form_data['field'][74]['city'] ?? '';
$emp3AddrState = $form_data['field'][74]['state'] ?? '';
$emp3AddrZip = $form_data['field'][74]['zip'] ?? '';
$emp3AddrFull = $emp3AddrSt1;
if ( !empty($emp3AddrSt2) ) {
    $emp3AddrFull = $emp3AddrFull . ', ' . $emp3AddrSt2;
}
if ( !empty($emp3AddrSt1) ) {
    $emp3AddrFull .= ', ' . $emp3AddrState . ' ' . $emp3AddrZip;
}
$emp3WageSt = $form_data['field'][75] ?? '';
$emp3WageFl = $form_data['field'][76] ?? '';
$emp3Status = $form_data['field'][77] ?? '';
$emp3Hours = $form_data['field'][78] ?? '';
$emp3Super = $form_data['field'][79] ?? '';
$emp3Tel = $form_data['field'][80] ?? '';
$emp3Reason = $form_data['field'][81] ?? '';

$emp4DtFrom = $form_data['field'][174] ?? '';
$emp4DtTo = $form_data['field'][175] ?? '';
$emp4Pos = $form_data['field'][83] ?? '';
$emp4Name = $form_data['field'][84] ?? '';
$emp4AddrSt1 = $form_data['field'][86]['street'] ?? '';
$emp4AddrSt2 = $form_data['field'][86]['street2'] ?? '';
$emp4AddrCity = $form_data['field'][86]['city'] ?? '';
$emp4AddrState = $form_data['field'][86]['state'] ?? '';
$emp4AddrZip = $form_data['field'][86]['zip'] ?? '';
$emp4AddrFull = $emp4AddrSt1;
if ( !empty($emp4AddrSt2) ) {
    $emp4AddrFull .= ', ' . $emp4AddrSt2;
}
if ( !empty($emp4AddrSt1) ) {
    $emp4AddrFull .= ', ' . $emp4AddrState . ' ' . $emp4AddrZip;
}
$emp4WageSt = $form_data['field'][108] ?? '';
$emp4WageFl = $form_data['field'][109] ?? '';
$emp4Status = $form_data['field'][87] ?? '';
$emp4Hours = $form_data['field'][88] ?? '';
$emp4Super = $form_data['field'][89] ?? '';
$emp4Tel = $form_data['field'][90] ?? '';
$emp4Reason = $form_data['field'][91] ?? '';

$emp5DtFrom = $form_data['field'][176] ?? '';
$emp5DtTo = $form_data['field'][177] ?? '';
$emp5Pos = $form_data['field'][100] ?? '';
$emp5Name = $form_data['field'][101] ?? '';
$emp5AddrSt1 = $form_data['field'][102]['street'] ?? '';
$emp5AddrSt2 = $form_data['field'][102]['street2'] ?? '';
$emp5AddrCity = $form_data['field'][102]['city'] ?? '';
$emp5AddrState = $form_data['field'][102]['state'] ?? '';
$emp5AddrZip = $form_data['field'][102]['zip'] ?? '';
$emp5AddrFull = $emp5AddrSt1;
if ( !empty($emp5AddrSt2) ) {
    $emp5AddrFull .= ', ' . $emp5AddrSt2;
}
if ( !empty($emp5AddrSt1) ) {
    $emp5AddrFull .= ', ' . $emp5AddrState . ' ' . $emp5AddrZip;
}
$emp5WageSt = $form_data['field'][110] ?? '';
$emp5WageFl = $form_data['field'][111] ?? '';
$emp5Status = $form_data['field'][103] ?? '';
$emp5Hours = $form_data['field'][104] ?? '';
$emp5Super = $form_data['field'][105] ?? '';
$emp5Tel = $form_data['field'][106] ?? '';
$emp5Reason = $form_data['field'][107] ?? '';

$printName = $form_data['field'][41] ?? '';
$signature = $form_data['signature_details_id'][68]['path']; /* the full path to the signature */
$signDate = $form_data['field'][43] ?? '';

$availDt = $form_data['field'][119] ?? '';
$availDN = $form_data['field'][120] ?? '';

$monFrom = $form_data['field'][122] ?? '';
$monTo = $form_data['field'][123] ?? '';
$tueFrom = $form_data['field'][125] ?? '';
$tueTo = $form_data['field'][126] ?? '';
$wedFrom = $form_data['field'][128] ?? '';
$wedTo = $form_data['field'][129] ?? '';
$thuFrom = $form_data['field'][131] ?? '';
$thuTo = $form_data['field'][132] ?? '';
$friFrom = $form_data['field'][134] ?? '';
$friTo = $form_data['field'][135] ?? '';
$satFrom = $form_data['field'][137] ?? '';
$satTo = $form_data['field'][138] ?? '';
$sunFrom = $form_data['field'][140] ?? '';
$sunTo = $form_data['field'][141] ?? '';

$licenseState = $form_data['field'][155] ?? '';
$licenseNum = $form_data['field'][153] ?? '';
$licenseExp = $form_data['field'][154] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Employment Application</title>
    <style>
        body {
            font-family: 'Book Antiqua', serif;
            font-size: 13px;
            line-height: 1.5;
            width: 90%;
            margin: auto;
        }
        .section-title {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .section-title.smaller {
            font-size: 12px;
        }
        .section-title-sub-b {
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        .section-title-sub-u {
            font-size: 13px;
            text-decoration: underline;
            font-weight: bold;
            padding: 0;
            margin: 0;
        }
        hr.thick {
            margin-bottom: 0;
        }
        .entry {
            font-size: 14px;
        }
        .entry_u {
            font-size: 14px;
            border-bottom: 1px solid black;
        }
        .field {
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
        .field-consent {
            border-bottom: 1px solid black;
        }
        .field.last {
            border-bottom: 1px solid black;
        }
        .field.inner {
            border-top: none;
        }
        .field.inner-col {
            border-left: none;
        }
        .label {
            text-align: left;
        }
        .label-sub {
            text-align: left;
            font-size: 11px;
        }
        .thick {
            height:5px;
            color: black;
            background-color: black;
        }
        .dotted {
            border-top:2px dotted;
        }
        .smaller {
            font-size: 11px;
        }
        .smallish {
            font-size: 11.5px;
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <table autosize="1">
        <tr class="row">
            <td width="40%" style="font-size: .8em;">
                123 Street Ave, Somewhere, FL 32222<br />
                Telephone: (444) 444-4444 / Facsimile: (444) 444-4444
            </td>
            <td>
                <img src="https://duppinstech.com/wp-content/uploads/2025/01/logo.png"/>
            </td>
            <td width="40%" style="font-size: .8em;text-align: right;">
                123 Street Road, Elsewhere, FL 32222<br />
                Telephone: (555) 555-5555 / Facsimile: (555) 555-5555
            </td>
        </tr>
    </table>
    <h2 class="section-title">Employment Application</h2>
    <br />
    <p class="section-title" style="text-align: left;">Thank you for your interest in employment with Wrecker Service, Inc. We are an Equal Opportunity Employer and Drug Free Workplace. All applicants will receive consideration for employment without regard to race, color, religion, sex, national origin, age, disability, veteran status, military status or obligations.</p>
    <br />
    <p class="section-title section-title-sub-b" style="text-align: left;">INSTRUCTIONS AND INFORMATION</p>
    <p class="section-title" style="text-align: left;">To be considered for employment, you must complete this application in full with true and correct information. Failure to do so may result in disqualification from consideration for hire or termination of employment if you are hired.</p>
    <br />
    <p class="section-title" style="text-align: left;"><b>Please print legibly.</b> Complete <b>all</b> areas below.</p>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="70%">
                <span class="label-sub">Legal Name <i>(Last, First, Middle Initial)</i></span>
                <br /><br />
                <?php echo esc_html( $legalName ); ?>&nbsp;
            </td>
            
            <td class="field">
                <span class="label-sub">Email Address</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $email ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Address <i>(Street, City, State, Zip Code)</i></span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $fullAddress ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="25%">
                <span class="label-sub">Home Phone</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $homeTel ); ?>&nbsp;</span>
            </td>
            <td class="field inner-col" width="25%">
                <span class="label-sub">Work Phone</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $workTel ); ?>&nbsp;</span>
            </td>
            <td class="field inner-col" width="25%">
                <span class="label-sub">May we contact you at work?</span>
                <br /><br />
                <span class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $workCtc == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%"><input type="checkbox" <?php if ( $workCtc == "No" ) { echo "checked=checked"; } ?> />No</span>
            </td>
            <td class="field" width="25%">
                <span class="label-sub">Cell Phone</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $cellTel ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="25%">
                <span class="label-sub">Position you are applying for:</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $position ); ?>&nbsp;</span>
            </td>
            <td class="field inner-col" width="25%">
                <span class="label-sub">Are you available to work:</span>
                <br />
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availFullTime == true ) { echo "checked=checked"; } ?> />Full-time</span>
                <br /><span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availPartTime == true ) { echo "checked=checked"; } ?> />Part-time</span>
                <br /><span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availSeasonal == true ) { echo "checked=checked"; } ?> />Seasonal</span>
            </td>
            </td>
            <td class="field inner-col" width="25%">
                <span class="label-sub">Hourly Rate Desired:</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $rate ); ?>&nbsp;</span>
            <td class="field inner-col" width="25%">
                <span class="label-sub">If hired, when can you start work?</span>
                <br /><br />
                <span class="entry"><?php echo esc_html( $startDate ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="40%" style="border-top:1px solid black;border-right: none;">
                <span class="label-sub">Available to Work (mark all that apply)</span>
            </td>
            <td class="field inner-col" style="border-right: none;">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availMorning == true ) { echo "checked=checked"; } ?> />Morning</span>
            </td>
            <td class="field inner-col" style="border-right: none;">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availAfternoon == true ) { echo "checked=checked"; } ?> />Afternoon</span>
            </td>
            <td class="field inner-col" style="border-right: none;">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availEvening == true ) { echo "checked=checked"; } ?> />Evening</span>
            </td>
            <td class="field inner-col" style="border-right: 1px solid black;">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $availWeekends == true ) { echo "checked=checked"; } ?> />Weekends</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field inner" width="40%" style="border-right:none;">
                <span class="label-sub">Are you at least 18 years of age?</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $age == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $age == "No" ) { echo "checked=checked"; } ?> />No</span>
            </td>
            <td class="field inner" style="border-left:none;border-right: 1px solid black;">
                <span class="label-sub">Are you legally authorized to work in the U.S.?</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $legal == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $legal == "No" ) { echo "checked=checked"; } ?> />No</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="75%">
                <span class="label-sub">For reference purposes, have you attended school or worked under another name?</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $altName == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $altName == "No" ) { echo "checked=checked"; } ?> />No</span>
                <br /><br />
                <span class="label-sub">If yes, list name(s):</span>
                <span class="entry"><?php echo esc_html( $altNameList ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="75%">
                <span class="label-sub">Have you previously worked for Wrecker</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $prevWork == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $prevWork == "No" ) { echo "checked=checked"; } ?> />No</span>
                <br /><br />
                <span class="label-sub">Service, Inc.? If yes, when (month, year)?</span>
                <span class="entry"><?php echo esc_html( $prevWorkMY ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="75%">
                <span class="label-sub">Do any of your friends, relatives, or spouse work for Wrecker Service, Inc.?</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $friends == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $friends == "No" ) { echo "checked=checked"; } ?> />No</span>
                <br /><br />
                <span class="label-sub">If yes, list name(s) and relationship:</span>
                <span class="entry"><?php echo esc_html( $friendsName ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last" width="50%">
                <span class="label-sub">How did you find out about this job opening?</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $findOut == "Current Employee" ) { echo "checked=checked"; } ?> />Current Employee</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $findOut == "Advertisement" ) { echo "checked=checked"; } ?> />Advertisement</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $findOut == "Employment Office" ) { echo "checked=checked"; } ?> />Employment Office</span>
                <br /><br />
                <span class="label-sub">Other (please specify):</span>
                <span class="entry"><?php if ( $findOut != "Current Employee" && $findOut != "Advertisement" && $findOut != "Employment Office" ) { echo esc_html( $findOut ); } ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <pagebreak/>
    <!-- EDUCATION & SKILLS -->
    <p class="section-title-sub-b">Education & Skills</p>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Name of High School</span>
                <br />
                <span class="entry"><?php echo esc_html( $highSchool ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">High School Location <i>(City, State)</i></span>
                <br />
                <span class="entry"><?php echo esc_html( $highSchoolLoc ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">High School Graduate or GED?</span>
                <br />
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $highSchoolGrad == "Yes" ) { echo "checked=checked"; } ?> />Yes</span>
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $highSchoolGrad == "No" ) { echo "checked=checked"; } ?> />No</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Please list all post-high school education beginning with most recent.</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" with="30%">
                <span class="label-sub">Name & Location of School<br><i>(City and State)</i></span>
            </td>
            <td class="field inner-col" with="15%">
                <span class="label-sub">Graduated?</span>
            </td>
            <td class="field inner-col">
                <span class="label-sub">Degree/Diploma</span>
            </td>
            <td class="field" with="30%">
                <span class="label-sub">Course of Study</span>
            </td>
        </tr>
        <tr class="row">
            <td class="field">
                <span class="entry"><?php echo esc_html( $postEd1 ); ?>&nbsp;</span>
            </td>
            <td class="field inner-col">
                <span class="checkbox" style="font-size: .8em;"><input type="checkbox" <?php if ( $postEd1Grad == "Yes" ) { echo "checked=checked"; } ?> /><br />Yes<br /></span>
                <span class="checkbox" style="font-size: .8em;"><input type="checkbox" <?php if ( $postEd1Grad == "No" ) { echo "checked=checked"; } ?> /><br />No</span>
            </td>
            <td class="field inner-col">
                <span class="entry"><?php echo esc_html( $postEd1Deg ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $postEd1Course ); ?>&nbsp;</span>
            </td>
        </tr>
        <tr class="row">
            <td class="field">
                <span class="entry"><?php echo esc_html( $postEd2 ); ?>&nbsp;</span>
            </td>
            <td class="field inner-col">
                <span class="checkbox" style="font-size: .8em;"><input type="checkbox" <?php if ( $postEd2Grad == "Yes" ) { echo "checked=checked"; } ?> /><br />Yes<br /></span>
                <span class="checkbox" style="font-size: .8em;"><input type="checkbox" <?php if ( $postEd2Grad == "No" ) { echo "checked=checked"; } ?> /><br />No</span>
                <!-- 
                <div>
                    <span style="font-size: .8em;">If no, approximate number</span>
                    <br />
                    <span style="font-size: .8em;">of credit hours completed.</span>
                </div>
                -->
            </td>
            <td class="field inner-col">
                <span class="entry"><?php echo esc_html( $postEd2Deg ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="entry"><?php echo esc_html( $postEd2Course ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub"><i>Note: Applicants for some positions will be required to submit official copies of educational transcripts</i></span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Relevant Skills/Training/Certification <i> (check box for all that apply)</i></span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="25%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsWord == true ) { echo "checked=checked"; } ?> />Word Processing Skills</span>
            </td>
            <td class="field" width="25%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsSpreadsheet == true ) { echo "checked=checked"; } ?> />Spreadsheet Skills</span>
            </td>
            <td class="field" width="25%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsDatabase == true ) { echo "checked=checked"; } ?> />Database Skills</span>
            </td>
            <td class="field" width="25%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsOffice == true ) { echo "checked=checked"; } ?> />Office Equipment Operation</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="25%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsSupervisor == true ) { echo "checked=checked"; } ?> />Supervisory Skills</span>
            </td>
            <td class="field" width="25%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsProject == true ) { echo "checked=checked"; } ?> />Project management skills</span>
            </td>
            <td class="field" width="50%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $skillsOther == true ) { echo "checked=checked"; } ?> />Other (please list):</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last">
            <span class="label-sub"><b>SKILLS/CERTIFICATIONS:</b> List other skills or certifications relevant to this job, including professional licenses, training, and other related knowledge. <b>Please attach copies of relevant licenses and certifications.</b></span>
            <br />
            <br />
            <span class="entry"><?php echo $skilsOtherList; ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <!-- EMPLOYMENT HISTORY -->
    <p class="section-title-sub-b">EMPLOYMENT HISTORY: <span style="font-size: .8em;">List all previous employment for the last ten years, including military service, starting with the most recent position held.</span></p>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Dates Employed (month/year)</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Position Title</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1Pos ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1DtTo ); ?>&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1Name); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Wages</span>
            </td>
            <td class="field" width="20%">
                <span class="label-sub">&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Address</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Start $</span>
                <span class="entry"><?php echo esc_html( $emp1WageSt); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="20%">
                <span class="label-sub">Final $</span>
                <span class="entry"><?php echo esc_html( $emp1WageFl); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
            <span class="entry"><?php echo esc_html( $emp1AddrFull); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row"style="border-top: none; border-bottom: none;">
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp1Status == "Full-time" ) { echo "checked=checked"; } ?> />Full-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp1Status == "Part-time" ) { echo "checked=checked"; } ?> />Part-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="entry"><?php echo esc_html( $emp1Hours); ?>&nbsp;</span> hrs/wk
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
                <span class="label-sub">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last">
                <span class="label-sub">Supervisor’s Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1Super ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Telephone Number</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1Tel ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Reason For Leaving</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp1Reason); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Dates Employed (month/year)</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Position Title</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2Pos ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2DtTo ); ?>&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2Name); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Wages</span>
            </td>
            <td class="field" width="20%">
                <span class="label-sub">&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Address</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Start $</span>
                <span class="entry"><?php echo esc_html( $emp2WageSt); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="20%">
                <span class="label-sub">Final $</span>
                <span class="entry"><?php echo esc_html( $emp2WageFl); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
            <span class="entry"><?php echo esc_html( $emp2AddrFull); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row"style="border-top: none; border-bottom: none;">
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp2Status == "Full-time" ) { echo "checked=checked"; } ?> />Full-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp2Status == "Part-time" ) { echo "checked=checked"; } ?> />Part-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="entry"><?php echo esc_html( $emp2Hours); ?>&nbsp;</span> hrs/wk
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
                <span class="label-sub">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last">
                <span class="label-sub">Supervisor’s Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2Super ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Telephone Number</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2Tel ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Reason For Leaving</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp2Reason); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Dates Employed (month/year)</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Position Title</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3Pos ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3DtTo ); ?>&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3Name); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Wages</span>
            </td>
            <td class="field" width="20%">
                <span class="label-sub">&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Address</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Start $</span>
                <span class="entry"><?php echo esc_html( $emp3WageSt); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="20%">
                <span class="label-sub">Final $</span>
                <span class="entry"><?php echo esc_html( $emp3WageFl); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
            <span class="entry"><?php echo esc_html( $emp3AddrFull); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row"style="border-top: none; border-bottom: none;">
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp3Status == "Full-time" ) { echo "checked=checked"; } ?> />Full-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp3Status == "Part-time" ) { echo "checked=checked"; } ?> />Part-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="entry"><?php echo esc_html( $emp3Hours); ?>&nbsp;</span> hrs/wk
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
                <span class="label-sub">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last">
                <span class="label-sub">Supervisor’s Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3Super ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Telephone Number</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3Tel ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Reason For Leaving</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp3Reason); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Dates Employed (month/year)</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Position Title</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4Pos ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4DtTo ); ?>&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4Name); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Wages</span>
            </td>
            <td class="field" width="20%">
                <span class="label-sub">&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Address</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Start $</span>
                <span class="entry"><?php echo esc_html( $emp4WageSt); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="20%">
                <span class="label-sub">Final $</span>
                <span class="entry"><?php echo esc_html( $emp4WageFl); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
            <span class="entry"><?php echo esc_html( $emp4AddrFull); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row"style="border-top: none; border-bottom: none;">
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp4Status == "Full-time" ) { echo "checked=checked"; } ?> />Full-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp4Status == "Part-time" ) { echo "checked=checked"; } ?> />Part-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="entry"><?php echo esc_html( $emp4Hours); ?>&nbsp;</span> hrs/wk
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
                <span class="label-sub">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last">
                <span class="label-sub">Supervisor’s Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4Super ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Telephone Number</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4Tel ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Reason For Leaving</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp4Reason); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">Dates Employed (month/year)</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Position Title</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5Pos ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field">
                <span class="label-sub">From</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5DtFrom ); ?>&nbsp;</span>
            </td>
            <td class="field">
                <span class="label-sub">To</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5DtTo ); ?>&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5Name); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Wages</span>
            </td>
            <td class="field" width="20%">
                <span class="label-sub">&nbsp;</span>
            </td>
            <td class="field" width="60%">
                <span class="label-sub">Organization Address</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field" width="20%">
                <span class="label-sub">Start $</span>
                <span class="entry"><?php echo esc_html( $emp5WageSt); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="20%">
                <span class="label-sub">Final $</span>
                <span class="entry"><?php echo esc_html( $emp5WageFl); ?>&nbsp;</span>/hour
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
            <span class="entry"><?php echo esc_html( $emp5AddrFull); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row"style="border-top: none; border-bottom: none;">
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp5Status == "Full-time" ) { echo "checked=checked"; } ?> />Full-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="checkbox" width="2.5%" style="font-size: .8em;"><input type="checkbox" <?php if ( $emp5Status == "Part-time" ) { echo "checked=checked"; } ?> />Part-time</span>
            </td>
            <td class="field" width="13.3%">
                <span class="entry"><?php echo esc_html( $emp5Hours); ?>&nbsp;</span> hrs/wk
            </td>
            <td class="field" width="60%" style="border-top: none; border-bottom: none;">
                <span class="label-sub">&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="field last">
                <span class="label-sub">Supervisor’s Name</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5Super ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Telephone Number</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5Tel ); ?>&nbsp;</span>
            </td>
            <td class="field last">
                <span class="label-sub">Reason For Leaving</span>
                <br />
                <span class="entry"><?php echo esc_html( $emp5Reason); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <br />
    <p class="section-title-sub-b">ACKNOWLEDGEMENT</p>
    <p>I certify that the above statements are true and complete. I understand that any false information and/or omissions in this application or within the supporting documents will be sufficient grounds for refusal to hire me, or if I am hired, immediate termination without notice. I understand that completion of this application in no way constitutes an offer of employment.</p>
    <p>I authorize Wrecker Service, Inc. to obtain information about me, including but not limited to: driver’s license records, criminal background records, credit history, and previous employment. I authorize investigation of all statements contained herein and authorize the release of information concerning my previous employment. Further, I release all parties from all liability for any damage that may result from furnishing same to you. I also agree to voluntarily submit to a pre-employment and random drug screens. I acknowledge that Wrecker Service, Inc. is an “at will” employer, and that if hired, my employment is “at will” for no definite period. I also acknowledge that employment may be terminated at any time with or without prior notice, with or without cause.</p>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label">Applicant's Printed Name:
                <span class="entry_u"><?php echo esc_html( $printName ); ?>&nbsp;</span>
            </td>
            <td class="label">Date:
                <span class="entry_u"><?php echo esc_html( $signDate ); ?>&nbsp;</span>
            </td>
        </tr>
    </table>
    <table autosize="1">
        <tr class="row">
            <td class="label">
                <p>Applicant Signature: 
                    <span class="entry_u">
                        <?php 
                            //echo esc_html( $signature );
                            /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                            if ( is_file( $signature ) ) {
                                echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                            } 
                        ?>&nbsp;
                    </span>
                </p>
            </td>
        </tr>
    </table>
    <br />
    <br />
    <p>Updated 06/24</p>
    <pagebreak/>
    <!-- BACKGROUND CONSENT 2 -->
    <h3 class="section-title">DISCLOSURE AND AUTHORIZATION TO OBTAIN CONSUMER REPORT </h3>
    <h3 class="section-title">FOR EMPLOYMENT PURPOSES</h3>
    <p class="smallish">
        Wrecker Service, Inc. may obtain a consumer report (commonly known as a background report) and/or investigative 
        consumer report from a consumer reporting agency for employment purposes.  The consumer report may include information 
        concerning your employment history, education, qualifications, character, general reputation, personal characteristics, criminal 
        record, motor vehicle record, mode of living and/or credit standing and indebtedness. This information may be obtained from public 
        and/or private sources.
    </p>
    <p class="smallish">
        A consumer report and/or an investigative consumer report may be obtained in processing your application for employment, or at 
        any time during your employment period, as authorized by state law and/or the Fair Credit Reporting Act (FCRA). Should an 
        investigative consumer report (a consumer report in which the above types of information are obtained through personal interviews) 
        be requested, you will have the right to obtain a complete and accurate disclosure of the nature and scope of the investigation 
        requested and a written summary of your rights under the Fair Credit Reporting Act.
    </p>
    <p class="smallish">
        In the event that information from a consumer report obtained about you from a consumer reporting agency is used in whole or in 
        part in making an adverse decision with regard to employment, you will be provided with a copy of the consumer report and a 
        description in writing of your rights under the law.
    </p>
    <div style="border:1px solid black;padding:1%;">
        <table autosize="1">
            <tr class="row">
                <td class="field-consent" width=25%><span class="entry"><?php echo esc_html( $lastName ); ?>&nbsp;</span></td>
                <td class="field-consent" width=25%><span class="entry"><?php echo esc_html( $firstName ); ?>&nbsp;</span></td>
                <td class="field-consent" width=25%><span class="entry"><?php echo esc_html( $middleName ); ?>&nbsp;</span></td>
                <td class="field-consent" width=25%><span class="entry"><?php echo esc_html( $maidenName ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">Last</td>
                <td class="label-sub">First</td>
                <td class="label-sub">Middle</td>
                <td class="label-sub">Maiden / Other Names Used</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="field-consent" width=33.3%><span class="entry"><?php echo esc_html( $dob ); ?>&nbsp;</span></td>
                <td class="field-consent" width=33.3%><span class="entry"><?php echo esc_html( $AddrCty ); ?>&nbsp;</span></td>
                <td class="field-consent" width=33.3%><span class="entry"><?php echo esc_html( $ssn ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">DOB<i>(MM/DD/YYYY)</i></td>
                <td class="label-sub">Place of Birth (City, State, Country)</td>
                <td class="label-sub">Social Security Number</td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="field-consent" width=35%><span class="entry"><?php echo esc_html( $gender ); ?>&nbsp;</span></td>
                <td class="field-consent" width=65%><span class="entry"><?php echo esc_html( $race ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">Legal Gender (M/F/X)</td>
                <td class="label-sub">Race – (White/Black; American Indian or Alaskan; Asian or Pacific Islander; or Unknown)</td>
            </tr>
        </table>
        <p style="text-align:left;margin:0;padding:0;"><b>Valid Identifying Document (Driver’s License, State Issued Identification Card)</b></p>
        <table autosize="1">
            <tr class="row">
                <td class="field-consent" width=33.3%><span class="entry"><?php echo esc_html( $licenseState ); ?>&nbsp;</span></td>
                <td class="field-consent" width=33.3%><span class="entry"><?php echo esc_html( $licenseNum ); ?>&nbsp;</span></td>
                <td class="field-consent" width=33.3%><span class="entry"><?php echo esc_html( $licenseExp ); ?>&nbsp;</span></td>
            </tr>
            <tr class="row">
                <td class="label-sub">State of Issuance</td>
                <td class="label-sub">Document Number</td>
                <td class="label-sub">Expiration Date</td>
            </tr>
        </table>
    </div>
    <h3 class="section-title" style="text-align:left;margin:0;padding:0;">AUTHORIZATION</h3>
    <p class="smallish">
        I have carefully read and understand this Disclosure and Authorization Form and the attached Summary of Rights under the Fair 
        Credit Reporting Act.  I hereby authorize Wrecker Service, Inc. to obtain and/or its agent to obtain and furnish to 
        Wrecker Service, Inc. information related to my background to be used for employment purposes. I hereby authorize 
        any law enforcement agency, institution (including learning institution), information service bureau, credit bureau, record/data 
        repository, court, motor vehicle record agency, employer, military, and other individuals and sources contacted by 
        Wrecker Service, Inc. and/or its agent to furnish the information requested by the consumer reporting agency for employment 
        purposes. The information obtained may be redisclosed to other Federal agencies for the above purposes and in fulfillment of 
        official responsibilities to the extent that such disclosure is permitted by law
    </p>
    <p class="smallish">
        I understand that Wrecker Service, Inc. will request motor vehicle driving records and a background check consisting of 
        any/all wants, warrants, criminal history, and sex-offender registry check that is to be used solely for employment-related purposes. 
        I understand that an offer of employment or continuation of employment will be contingent on the receipt and evaluation of the 
        driving records and background check results. The Company may also request additional reports about me for employment-related 
        purposes during the course of my employment. I understand that my consent will apply throughout my employment to the extent 
        permitted by law. I understand and agree that an email, facsimile (FAX), or photographic copy of this authorization will be as valid 
        as the original.
    </p>
    <p class="smallish">
        I hereby release Wrecker Service, Inc., all its agents and employees, and all persons, agencies, and entities furnishing 
        information or reports about me from all liability arising out of the request for or release of any of the above-mentioned information 
        or reports.
    </p>
    <div style="border:1px solid black;padding:1%;">
        <h3 class="section-title" style="text-align:left;">Applicant/Employee:</h3>
        <table autosize="1">
            <tr class="row">
                <td class="field-consent" width="50%">
                    <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                    ?>&nbsp;
                </td>
                <td class="field-consent" width="50%"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
            </tr>
        </table>
        <table autosize="1">
            <tr class="row">
                <td class="label-sub" width="50%">Signature of Employee</td>
                <td class="label-sub" width="50%">Date</td>
            </tr>
        </table>
    </div>
    <pagebreak/>
    <!-- AVAILABILITY FORM -->
    <h2 class="section-title">AVAILABILITY FORM</h2>
    <br />
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5.5%">Name</td>
            <td class="field-consent"><span class="entry"><?php echo esc_html( $fullName ); ?>&nbsp;</span></td>
            <td class="label" width="5.5%">Date</td>
            <td class="field-consent"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="18%">Position Applying For:</td>
            <td class="field-consent"><span class="entry"><?php echo esc_html( $position ); ?>&nbsp;</span></td>
        </tr>
    </table>
    <p>
        Wrecker Service, Inc. is open 24 hours per day, 7 days per week, and 365 days per year. The 
        purpose of this form is to establish your working availability. The information you provide will help 
        determine the location for your placement. Please be accurate and specific when providing the days and 
        times you are available. Applicants with the greatest availability will be given first consideration. Your 
        availability does not constitute an offer of employment or a schedule agreement. All shifts are scheduled 
        based on the needs of the business and may change as needed.
    </p>
    <p>
        This form is <b>NOT</b> a schedule request form. <b>Please only indicate specific dates/times you cannot work.</b>
        If you are hired and need to change your availability, you acknowledge that we may or may not be able 
        to accommodate the changes. You will also be responsible for updating this form if your availability 
        changes.
    </p>
    <table autosize="1">
        <tr class="row">
            <td>
                <span><input type="checkbox" width="5%" <?php if ( $availDN == "I am fully available to work any days/hours" ) { echo "checked=checked"; } ?>/>&nbsp;</span>
                <span class="label" width="28%">I <b>am</b> fully available to work any days/hours</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td>
                <span><input type="checkbox" width="5%" <?php if ( !empty($monFrom) ) { echo "checked=checked"; } ?>/>&nbsp;</span>
                <span class="label" width="28%">I <b>am NOT</b> available to work the following days/hours:</span>
            </td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($monFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Monday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $monFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $monTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($tueFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Tuesday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $tueFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $tueTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($wedFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Wednesday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $wedFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $wedTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($thuFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Thursday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $thuFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $thuTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($friFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Friday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $friFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $friTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($satFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Saturday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $satFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $satTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="5%">&nbsp;</td>
            <td>
                <input type="checkbox" width="5%" <?php if ( !empty($sunFrom) ) { echo "checked=checked"; } ?>/>
                <span class="label">Sunday</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>from:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $sunFrom ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td width="20%">
                <span class="label"><b><i>to:</i></b></span>
                <span class="field-consent"><?php echo esc_html( $sunTo ); ?>&nbsp;</span>
                <span class="label">am/pm</span>
            </td>
            <td class="label" width="40%">&nbsp;</td>
        </tr>
    </table>
    <br />
    <table autosize="1">
        <tr class="row">
            <td class="label" width="27%">I am available to start work on:</td>
            <td class="field-consent"><span class="entry"><?php echo esc_html( $availDt ); ?>&nbsp;</span></td>
            <td width="55%">&nbsp;</td>
        </tr>
    </table>
    <p>
        <i>Once hired, to request days off, please use the Request for Time Off forms located at Dispatch or HR Office.</i>
    </p>
    <p>
        I understand that this form is not a condition of employment. I further understand that I may be 
        required to make a reasonable accommodation with my availability so that it does not cause a lack of 
        necessary staffing.
    </p>
    <table autosize="1">
        <tr class="row">
            <td class="label" width="8%">Signed:</td>
            <td class="field-consent" width="35%">
                <?php 
                    //echo esc_html( $signature );
                    /* Output signature if it exists (this prevents a red X showing up in the PDF when the image doesn't exist) */
                    if ( is_file( $signature ) ) {
                        echo '<img src="' . esc_attr( $signature ) . '" width="150" />'; /* best to use the path to reference the image and check it exists on the server first */
                    } 
                ?>&nbsp;
            </td>
            <td class="label" width="5.5%">Date</td>
            <td class="field-consent"><span class="entry"><?php echo esc_html( $signDate ); ?>&nbsp;</span></td>
        </tr>
    </table>
</body>
</html>
