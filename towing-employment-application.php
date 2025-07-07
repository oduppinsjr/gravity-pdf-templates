
<?php

/**
 * Template Name: Employment Application
 * Version: 1.0
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
$formerName = $form_data['field'][43] ?? '';
$ssn = $form_data['field'][42] ?? '';
$homePhone = $form_data['field'][5] ?? '';
$cellPhone = $form_data['field'][6] ?? '';
$email = $form_data['field'][3] ?? '';
$dob = $form_data['field'][4] ?? '';

$AddrSt1 = $form_data['field'][7]['street'] ?? '';
$AddrSt2 = $form_data['field'][7]['street2'] ?? '';
$AddrCty = $form_data['field'][7]['city'] ?? '';
$AddrState = $form_data['field'][7]['state'] ?? '';
$AddrZip = $form_data['field'][7]['zip'] ?? '';
$AddrYrs = $form_data['field'][8] ?? '';
// Get today's date
$today = new DateTime();

// Extract the current year
$currentYear = (int)$today->format('Y');

// Subtract the years
$AddrDtFrom = $currentYear - (int)$AddrYrs;

$prevAddr1 = $form_data['list'][44][0]['Street Address'] ?? '';
$prevAddr1City = $form_data['list'][44][0]['City'] ?? '';
$prevAddr1State = $form_data['list'][44][0]['State'] ?? '';
$prevAddr1Zip = $form_data['list'][44][0]['Zip'] ?? '';
$prevAddr1DtFrom = $form_data['list'][44][0]['Date From'] ?? '';
$prevAddr1DtTo = $form_data['list'][44][0]['Date To'] ?? '';
$prevAddr2 = $form_data['list'][44][1]['Street Address'] ?? '';
$prevAddr2City = $form_data['list'][44][1]['City'] ?? '';
$prevAddr2State = $form_data['list'][44][1]['State'] ?? '';
$prevAddr2Zip = $form_data['list'][44][1]['Zip'] ?? '';
$prevAddr2DtFrom = $form_data['list'][44][1]['Date From'] ?? '';
$prevAddr2DtTo = $form_data['list'][44][1]['Date To'] ?? '';
$prevAddr3 = $form_data['list'][44][2]['Street Address'] ?? '';
$prevAddr3City = $form_data['list'][44][2]['City'] ?? '';
$prevAddr3State = $form_data['list'][44][2]['State'] ?? '';
$prevAddr3Zip = $form_data['list'][44][2]['Zip'] ?? '';
$prevAddr3DtFrom = $form_data['list'][44][2]['Date From'] ?? '';
$prevAddr3DtTo = $form_data['list'][44][2]['Date To'] ?? '';
$prevAddr4 = $form_data['list'][44][3]['Street Address'] ?? '';
$prevAddr4City = $form_data['list'][44][3]['City'] ?? '';
$prevAddr4State = $form_data['list'][44][3]['State'] ?? '';
$prevAddr4Zip = $form_data['list'][44][3]['Zip'] ?? '';
$prevAddr4DtFrom = $form_data['list'][44][3]['Date From'] ?? '';
$prevAddr4DtTo = $form_data['list'][44][3]['Date To'] ?? '';

$positionApply = $form_data['field'][46] ?? '';
$expectedRate = $form_data['field'][47] ?? '';
$StartDate = $form_data['field'][13] ?? '';
$workType = $form_data['field'][48] ?? '';
$shift = $form_data['field'][49] ?? '';
$shiftException = $form_data['field'][50] ?? '';
$legal = $form_data['field'][9] ?? '';

// *** Education ***
$elemSchool = $form_data['field'][231] ?? '';
$elemSchoolLevel = $form_data['field'][55] ?? '';
$elemSchoolGrad = $form_data['field'][56] ?? '';
$elemSchoolDegree = $form_data['field'][57] ?? '';

$highSchool = $form_data['field'][232] ?? '';
$highSchoolLevel = $form_data['field'][59] ?? '';
$highSchoolGrad = $form_data['field'][60] ?? '';
$highSchoolDegree = $form_data['field'][61] ?? '';

$techSchool = $form_data['field'][62] ?? '';
$techSchoolLevel = $form_data['field'][63] ?? '';
$techSchoolGrad = $form_data['field'][64] ?? '';
$techSchoolDegree = $form_data['field'][65] ?? '';

$college1 = $form_data['field'][66] ?? '';
$college1Level = $form_data['field'][67] ?? '';
$college1Grad = $form_data['field'][68] ?? '';
$college1Degree = $form_data['field'][69] ?? '';

$college2 = $form_data['field'][70] ?? '';
$college2Level = $form_data['field'][71] ?? '';
$college2Grad = $form_data['field'][72] ?? '';
$college2Degree = $form_data['field'][73] ?? '';

$otherSchool = $form_data['field'][74] ?? '';
$otherSchoolLevel = $form_data['field'][75] ?? '';
$otherSchoolGrad = $form_data['field'][76] ?? '';
$otherSchoolDegree = $form_data['field'][77] ?? '';

$appliedPrev = $form_data['field'][79] ?? '';
$appliedName = $form_data['field'][80] ?? '';
$appliedPosition = $form_data['field'][83] ?? '';
$appliedLocation = $form_data['field'][84] ?? '';
$appliedDate = $form_data['field'][85] ?? '';
$hiredDate = $form_data['field'][86] ?? '';
$leaveDate = $form_data['field'][87] ?? '';
$leaveReason = $form_data['field'][88] ?? '';

$over18 = $form_data['field'][81] ?? '';
$under18Age = $form_data['field'][82] ?? '';

$friend = $form_data['field'][89] ?? '';
$friendName = $form_data['field'][90] ?? '';
$friendPosition = $form_data['field'][91] ?? '';
$friendLocation = $form_data['field'][92] ?? '';

$relative = $form_data['field'][93] ?? '';
if ( $relative == "Yes" ) {
    $relativeName = $form_data['field'][94] ?? '';
    $relativePosition = $form_data['field'][95] ?? '';
    $relativeLocation = $form_data['field'][96] ?? '';
}

$referred = $form_data['field'][97] ?? '';

// *** Previous Employment ***
$emp1Name = $form_data['field'][34] ?? '';
$emp1Hired = $form_data['field'][99] ?? '';
$emp1Contact = $form_data['field'][100] ?? '';
$emp1Company = $form_data['field'][101] ?? '';
$emp1AddrSt1 = $form_data['field'][102]['street'] ?? '';
$emp1AddrSt2 = $form_data['field'][102]['street2'] ?? '';
$emp1AddrStreet .= $emp1AddrSt1;
if ( !empty($emp1AddrSt2) ) {
    $emp1AddrSteet .= ', ' . $emp1AddrSt2;
}
$emp1AddrCity = $form_data['field'][102]['city'] ?? '';
$emp1AddrState = $form_data['field'][102]['state'] ?? '';
$emp1AddrZip = $form_data['field'][102]['zip'] ?? '';
$emp1Phone = $form_data['field'][31] ?? '';
$emp1Supervisor = $form_data['field'][104] ?? '';
$emp1Business = $form_data['field'][105] ?? '';
$emp1Position = $form_data['field'][106] ?? '';
$emp1Reason = $form_data['field'][33] ?? '';
$emp1FMCSR = $form_data['field'][107] ?? '';
$emp1CFR = $form_data['field'][108] ?? '';

$emp2Name = $form_data['field'][30] ?? '';
$emp2Hired = $form_data['field'][109] ?? '';
$emp2Separated = $form_data['field'][110] ?? '';
$emp2Company = $form_data['field'][111] ?? '';
$emp2AddrSt1 = $form_data['field'][112]['street'] ?? '';
$emp2AddrSt2 = $form_data['field'][112]['street2'] ?? '';
$emp2AddrStreet .= $emp2AddrSt1;
if ( !empty($emp2AddrSt2) ) {
    $emp2AddrSteet .= ', ' . $emp2AddrSt2;
}
$emp2AddrCity = $form_data['field'][112]['city'] ?? '';
$emp2AddrState = $form_data['field'][112]['state'] ?? '';
$emp2AddrZip = $form_data['field'][112]['zip'] ?? '';
$emp2Phone = $form_data['field'][35] ?? '';
$emp2Supervisor = $form_data['field'][113] ?? '';
$emp2Business = $form_data['field'][114] ?? '';
$emp2Position = $form_data['field'][115] ?? '';
$emp2Reason = $form_data['field'][37] ?? '';
$emp2FMCSR = $form_data['field'][116] ?? '';
$emp2CFR = $form_data['field'][117] ?? '';

$emp3Name = $form_data['field'][118] ?? '';
$emp3Hired = $form_data['field'][119] ?? '';
$emp3Separated = $form_data['field'][120] ?? '';
$emp3Company = $form_data['field'][121] ?? '';
$emp3AddrSt1 = $form_data['field'][122]['street'] ?? '';
$emp3AddrSt2 = $form_data['field'][122]['street2'] ?? '';
$emp3AddrStreet .= $emp3AddrSt1;
if ( !empty($emp3AddrSt2) ) {
    $emp3AddrSteet .= ', ' . $emp3AddrSt2;
}
$emp3AddrCity = $form_data['field'][122]['city'] ?? '';
$emp3AddrState = $form_data['field'][122]['state'] ?? '';
$emp3AddrZip = $form_data['field'][122]['zip'] ?? '';
$emp3Phone = $form_data['field'][123] ?? '';
$emp3Supervisor = $form_data['field'][124] ?? '';
$emp3Business = $form_data['field'][125] ?? '';
$emp3Position = $form_data['field'][126] ?? '';
$emp3Reason = $form_data['field'][129] ?? '';
$emp3FMCSR = $form_data['field'][127] ?? '';
$emp3CFR = $form_data['field'][128] ?? '';

$emp4Name = $form_data['field'][240] ?? '';
$emp4Hired = $form_data['field'][242] ?? '';
$emp4Separated = $form_data['field'][244] ?? '';
$emp4Company = $form_data['field'][245] ?? '';
$emp4AddrSt1 = $form_data['field'][247]['street'] ?? '';
$emp4AddrSt2 = $form_data['field'][247]['street2'] ?? '';
$emp4AddrStreet .= $emp4AddrSt1;
if ( !empty($emp4AddrSt2) ) {
    $emp4AddrSteet .= ', ' . $emp4AddrSt2;
}
$emp4AddrCity = $form_data['field'][247]['city'] ?? '';
$emp4AddrState = $form_data['field'][247]['state'] ?? '';
$emp4AddrZip = $form_data['field'][247]['zip'] ?? '';
$emp4Phone = $form_data['field'][249] ?? '';
$emp4Supervisor = $form_data['field'][250] ?? '';
$emp4Business = $form_data['field'][253] ?? '';
$emp4Position = $form_data['field'][257] ?? '';
$emp4Reason = $form_data['field'][258] ?? '';
$emp4FMCSR = $form_data['field'][259] ?? '';
$emp4CFR = $form_data['field'][261] ?? '';

$emp5Name = $form_data['field'][239] ?? '';
$emp5Hired = $form_data['field'][241] ?? '';
$emp5Separated = $form_data['field'][243] ?? '';
$emp5Company = $form_data['field'][246] ?? '';
$emp5AddrSt1 = $form_data['field'][248]['street'] ?? '';
$emp5AddrSt2 = $form_data['field'][248]['street2'] ?? '';
$emp5AddrStreet .= $emp3AddrSt1;
if ( !empty($emp5AddrSt2) ) {
    $emp5AddrSteet .= ', ' . $emp5AddrSt2;
}
$emp5AddrCity = $form_data['field'][248]['city'] ?? '';
$emp5AddrState = $form_data['field'][248]['state'] ?? '';
$emp5AddrZip = $form_data['field'][248]['zip'] ?? '';
$emp5Phone = $form_data['field'][252] ?? '';
$emp5Supervisor = $form_data['field'][251] ?? '';
$emp5Business = $form_data['field'][254] ?? '';
$emp5Position = $form_data['field'][255] ?? '';
$emp5Reason = $form_data['field'][256] ?? '';
$emp5FMCSR = $form_data['field'][256] ?? '';
$emp5CFR = $form_data['field'][262] ?? '';

$empOtherNotes = $form_data['field'][130] ?? '';

// *** Military Service ***
$military = $form_data['field'][133] ?? '';
$militaryBranch = $form_data['field'][134] ?? '';
$militarySpecialty = $form_data['field'][135] ?? '';
$militaryRank = $form_data['field'][136] ?? '';
$militaryDischarge = $form_data['field'][137] ?? '';

// *** Criminal Background ***
$crimConv = $form_data['field'][139] ?? '';
$crimOffense1 = $form_data['field'][140] ?? '';
$crimOffense1Date = $form_data['field'][141] ?? '';
$crimOffense1Penalty = $form_data['field'][142] ?? '';
$crimOffense1Disposition = $form_data['field'][143] ?? '';
$crimOffense1Workplace = $form_data['field'][144] ?? '';
$crimOffense1Name = $form_data['field'][145] ?? '';
$crimOffense2 = $form_data['field'][146] ?? '';
$crimOffense2Date = $form_data['field'][147] ?? '';
$crimOffense2Penalty = $form_data['field'][148] ?? '';
$crimOffense2Disposition = $form_data['field'][149] ?? '';
$crimOffense2Workplace = $form_data['field'][150] ?? '';
$crimOffense2Name = $form_data['field'][151] ?? '';

// *** Yard Workers ***
$cdl = $form_data['field'][155] ?? '';
$cdlNumber = $form_data['field'][156] ?? '';
$cdlState = $form_data['field'][157] ?? '';
$cdlExpiration = $form_data['field'][158] ?? '';
$yardElectric = $form_data['field'][159] ?? '';
$yardGas = $form_data['field'][161] ?? '';
$yardFreight = $form_data['field'][160] ?? '';
$yardOther = $form_data['field'][162] ?? '';
$yardExperience = $form_data['field'][163] ?? '';

// *** Garage Applicants ***
$autoShop = $form_data['field'][166] ?? '';
$autoShopYears = $form_data['field'][167] ?? '';
$truckStop = $form_data['field'][168] ?? '';
$truckStopGas = $form_data['field'][169] ?? '';
$truckStopDiesel = $form_data['field'][170] ?? '';
$garageSpecialization = $form_data['field'][171] ?? '';

$woodTraining = $form_data['list'][172][0]['Years Training'] ?? '';
$woodExperience = $form_data['list'][172][0]['Years Experience'] ?? '';
$sheetTraining = $form_data['list'][175][0]['Years Training'] ?? '';
$sheetExperience = $form_data['list'][175][0]['Years Experience'] ?? '';
$clutchTraining = $form_data['list'][177][0]['Years Training'] ?? '';
$clutchExperience = $form_data['list'][177][0]['Years Experience'] ?? '';
$diffTraining = $form_data['list'][179][0]['Years Training'] ?? '';
$diffExperience = $form_data['list'][179][0]['Years Experience'] ?? '';
$transTraining = $form_data['list'][186][0]['Years Training'] ?? '';
$transExperience = $form_data['list'][186][0]['Years Experience'] ?? '';
$bodyTraining = $form_data['list'][173][0]['Years Training'] ?? '';
$bodyExperience = $form_data['list'][173][0]['Years Experience'] ?? '';
$elecTraining = $form_data['list'][174][0]['Years Training'] ?? '';
$elecExperience = $form_data['list'][174][0]['Years Experience'] ?? '';
$engineTraining = $form_data['list'][176][0]['Years Training'] ?? '';
$engineExperience = $form_data['list'][176][0]['Years Experience'] ?? '';
$dieselTraining = $form_data['list'][183][0]['Years Training'] ?? '';
$dieselExperience = $form_data['list'][183][0]['Years Experience'] ?? '';
$weldTraining = $form_data['list'][185][0]['Years Training'] ?? '';
$weldExperience = $form_data['list'][186][0]['Years Experience'] ?? '';
$oxyTraining = $form_data['list'][181][0]['Years Training'] ?? '';
$oxyExperience = $form_data['list'][181][0]['Years Experience'] ?? '';
$paintTraining = $form_data['list'][178][0]['Years Training'] ?? '';
$paintExperience = $form_data['list'][178][0]['Years Experience'] ?? '';
$brakeTraining = $form_data['list'][180][0]['Years Training'] ?? '';
$brakeExperience = $form_data['list'][180][0]['Years Experience'] ?? '';
$otherTraining = $form_data['list'][182][0]['Years Training'] ?? '';
$otherExperience = $form_data['list'][182][0]['Years Experience'] ?? '';
$otherTraining = $form_data['list'][184][0]['Years Training'] ?? '';
$otherExperience = $form_data['list'][184][0]['Years Experience'] ?? '';

// *** Clerical & Admin ***
$wpmTraining = $form_data['list'][189][0]['Years Training'] ?? '';
$wpmExperience = $form_data['list'][189][0]['Years Experience'] ?? '';
$dispatchTraining = $form_data['list'][194][0]['Years Training'] ?? '';
$dispatchExperience = $form_data['list'][194][0]['Years Experience'] ?? '';
$cashierTraining = $form_data['list'][193][0]['Years Training'] ?? '';
$cashierExperience = $form_data['list'][193][0]['Years Experience'] ?? '';
$shorthandTraining = $form_data['list'][192][0]['Years Training'] ?? '';
$shorthandExperience = $form_data['list'][192][0]['Years Experience'] ?? '';
$switchBoardTraining = $form_data['list'][191][0]['Years Training'] ?? '';
$switchBoardExperience = $form_data['list'][191][0]['Years Experience'] ?? '';
$computerTraining = $form_data['list'][190][0]['Years Training'] ?? '';
$computerExperience = $form_data['list'][190][0]['Years Experience'] ?? '';
$payableTraining = $form_data['list'][196][0]['Years Training'] ?? '';
$payableExperience = $form_data['list'][196][0]['Years Experience'] ?? '';
$excelTraining = $form_data['list'][195][0]['Years Training'] ?? '';
$excelExperience = $form_data['list'][195][0]['Years Experience'] ?? '';
$receivableTraining = $form_data['list'][197][0]['Years Training'] ?? '';
$receivableExperience = $form_data['list'][197][0]['Years Experience'] ?? '';
$computerPrograms = $form_data['field'][198] ?? '';
if (!empty($computerPrograms)) {
    // Remove any HTML tags and decode HTML entities
    $computerPrograms = strip_tags($computerPrograms);
    $computerPrograms = html_entity_decode($computerPrograms);

    // Check if the text contains bullets (starts with "•")
    if (preg_match('/^\s*•/', $computerPrograms)) {
        // Handle bulleted lists
        $listItems = preg_split('/\R/', $computerPrograms); // Split by newlines
        $cleanItems = [];
        
        foreach ($listItems as $item) {
            $item = trim($item); // Trim spaces
            if (!empty($item)) {
                // Remove the leading bullet and any space after it
                $cleanItem = preg_replace('/^\s*•\s*/', '', $item);
                $cleanItems[] = $cleanItem;
            }
        }
        
        // Combine items into a comma-delimited string
        $computerPrograms = implode(', ', $cleanItems);
    } else {
        // Handle plain text with line breaks
        $computerPrograms = preg_replace('/\R/', ', ', $computerPrograms); // Replace newlines with commas
        $computerPrograms = preg_replace('/\s*,\s*/', ', ', $computerPrograms); // Clean up extra spaces around commas
    }
}
// *** Driving Record ***
$straightTruckGas = $form_data['list'][199][0]['Years Gas'] ?? '';
$straightTruckDiesel = $form_data['list'][199][0]['Years Diesel'] ?? '';
$straightTruckOther = $form_data['list'][199][0]['Other'] ?? '';

$rollBackGas = $form_data['list'][201][0]['Years Gas'] ?? '';
$rollBackDiesel = $form_data['list'][201][0]['Years Diesel'] ?? '';
$rollBackOther = $form_data['list'][201][0]['Other'] ?? '';

$lightDutyGas = $form_data['list'][202][0]['Years Gas'] ?? '';
$lightDutyDiesel = $form_data['list'][202][0]['Years Diesel'] ?? '';
$lightDutyOther = $form_data['list'][202][0]['Other'] ?? '';

$mediumDutyGas = $form_data['list'][200][0]['Years Gas'] ?? '';
$mediumDutyDiesel = $form_data['list'][200][0]['Years Diesel'] ?? '';
$mediumDutyOther = $form_data['list'][200][0]['Other'] ?? '';

$heavyDutyGas = $form_data['list'][203][0]['Years Gas'] ?? '';
$heavyDutyDiesel = $form_data['list'][203][0]['Years Diesel'] ?? '';
$heavyDutyOther = $form_data['list'][203][0]['Other'] ?? '';

$trailerDoubleGas = $form_data['list'][206][0]['Years Gas'] ?? '';
$trailerDoubleDiesel = $form_data['list'][206][0]['Years Diesel'] ?? '';
$trailerDoubleOther = $form_data['list'][206][0]['Other'] ?? '';

$trailerSingleGas = $form_data['list'][205][0]['Years Gas'] ?? '';
$trailerSingleDiesel = $form_data['list'][205][0]['Years Diesel'] ?? '';
$trailerSingleOther = $form_data['list'][205][0]['Other'] ?? '';

$trailerTripleGas = $form_data['list'][204][0]['Years Gas'] ?? '';
$trailerTripleDiesel = $form_data['list'][204][0]['Years Diesel'] ?? '';
$trailerTripleOther = $form_data['list'][204][0]['Other'] ?? '';

$license1Num = $form_data['list'][207][0]['License Number'] ?? '';
$license1State = $form_data['list'][207][0]['State'] ?? '';
$license1Iss = $form_data['list'][207][0]['Issued'] ?? '';
$license1Exp = $form_data['list'][207][0]['Expires'] ?? '';
$license2Num = $form_data['list'][207][1]['License Number'] ?? '';
$license2State = $form_data['list'][207][1]['State'] ?? '';
$license2Iss = $form_data['list'][207][1]['Issued'] ?? '';
$license2Exp = $form_data['list'][207][1]['Expires'] ?? '';
$license3Num = $form_data['list'][207][2]['License Number'] ?? '';
$license3State = $form_data['list'][207][2]['State'] ?? '';
$license3Iss = $form_data['list'][207][2]['Issued'] ?? '';
$license3Exp = $form_data['list'][207][2]['Expires'] ?? '';

$states = $form_data['field'][210] ?? '';
$endorsements = $form_data['field'][208] ?? '';
if (!empty($endorsements)) {
    // Remove any HTML tags and decode HTML entities
    $endorsements = strip_tags($endorsements);
    $endorsements = html_entity_decode($endorsements);

    // Check if the text contains bullets (starts with "•")
    if (preg_match('/^\s*•/', $endorsements)) {
        // Handle bulleted lists
        $listItems = preg_split('/\R/', $endorsements); // Split by newlines
        $cleanItems = [];
        
        foreach ($listItems as $item) {
            $item = trim($item); // Trim spaces
            if (!empty($item)) {
                // Remove the leading bullet and any space after it
                $cleanItem = preg_replace('/^\s*•\s*/', '', $item);
                $cleanItems[] = $cleanItem;
            }
        }
        
        // Combine items into a comma-delimited string
        $endorsements = implode(', ', $cleanItems);
    } else {
        // Handle plain text with line breaks
        $endorsements = preg_replace('/\R/', ', ', $endorsements); // Replace newlines with commas
        $endorsements = preg_replace('/\s*,\s*/', ', ', $endorsements); // Clean up extra spaces around commas
    }
}

$awards = $form_data['field'][209] ?? '';
if (!empty($awards)) {
    // Remove any HTML tags and decode HTML entities
    $awards = strip_tags($awards);
    $awards = html_entity_decode($awards);

    // Check if the text contains bullets (starts with "•")
    if (preg_match('/^\s*•/', $awards)) {
        // Handle bulleted lists
        $listItems = preg_split('/\R/', $awards); // Split by newlines
        $cleanItems = [];
        
        foreach ($listItems as $item) {
            $item = trim($item); // Trim spaces
            if (!empty($item)) {
                // Remove the leading bullet and any space after it
                $cleanItem = preg_replace('/^\s*•\s*/', '', $item);
                $cleanItems[] = $cleanItem;
            }
        }
        
        // Combine items into a comma-delimited string
        $awards = implode(', ', $cleanItems);
    } else {
        // Handle plain text with line breaks
        $awards = preg_replace('/\R/', ', ', $awards); // Replace newlines with commas
        $awards = preg_replace('/\s*,\s*/', ', ', $awards); // Clean up extra spaces around commas
    }
}

$dcjs = $form_data['field'][212] ?? '';
$dcjsDenied = $form_data['field'][213] ?? '';
$dcjsDeniedReason = $form_data['field'][214] ?? '';
$felony = $form_data['field'][215] ?? '';

$lic1Denied = $form_data['list'][216][0]['Denied'] ?? '';
$lic1Revoked = $form_data['list'][216][0]['Revoked'] ?? '';
$lic1Suspended = $form_data['list'][216][0]['Suspended'] ?? '';
$lic1Type = $form_data['list'][216][0]['Type of License'] ?? '';
$lic1Date = $form_data['list'][216][0]['Date'] ?? '';
$lic1State = $form_data['list'][216][0]['State'] ?? '';
$lic1HowLong = $form_data['list'][216][0]['For How Long'] ?? '';
$lic1Reason = $form_data['list'][216][1]['Reason'] ?? '';
$lic2Denied = $form_data['list'][216][1]['Denied'] ?? '';
$lic2Revoked = $form_data['list'][216][1]['Revoked'] ?? '';
$lic2Suspended = $form_data['list'][216][1]['Suspended'] ?? '';
$lic2Type = $form_data['list'][216][1]['Type of License'] ?? '';
$lic2Date = $form_data['list'][216][1]['Date'] ?? '';
$lic2State = $form_data['list'][216][1]['State'] ?? '';
$lic2HowLong = $form_data['list'][216][1]['For How Long'] ?? '';
$lic2Reason = $form_data['list'][216][1]['Reason'] ?? '';
$lic3Denied = $form_data['list'][216][2]['Denied'] ?? '';
$lic3Revoked = $form_data['list'][216][2]['Revoked'] ?? '';
$lic3Suspended = $form_data['list'][216][2]['Suspended'] ?? '';
$lic3Type = $form_data['list'][216][2]['Type of License'] ?? '';
$lic3Date = $form_data['list'][216][2]['Date'] ?? '';
$lic3State = $form_data['list'][216][2]['State'] ?? '';
$lic3HowLong = $form_data['list'][216][2]['For How Long'] ?? '';
$lic3Reason = $form_data['list'][216][2]['Reason'] ?? '';
$lic4Denied = $form_data['list'][216][3]['Denied'] ?? '';
$lic4Revoked = $form_data['list'][216][3]['Revoked'] ?? '';
$lic4Suspended = $form_data['list'][216][3]['Suspended'] ?? '';
$lic4Type = $form_data['list'][216][3]['Type of License'] ?? '';
$lic4Date = $form_data['list'][216][3]['Date'] ?? '';
$lic4State = $form_data['list'][216][3]['State'] ?? '';
$lic4HowLong = $form_data['list'][216][3]['For How Long'] ?? '';
$lic4Reason = $form_data['list'][216][3]['Reason'] ?? '';

$violation1Dt = $form_data['list'][217][0]['Date'] ?? '';
$violation1Nature = $form_data['list'][217][0]['Nature of Violation'] ?? '';
$violation1State = $form_data['list'][217][0]['State'] ?? '';
$violation1Penalty = $form_data['list'][217][0]['Penalty'] ?? '';
$violation1Points = $form_data['list'][217][0]['Points'] ?? '';
$violation2Dt = $form_data['list'][217][1]['Date'] ?? '';
$violation2Nature = $form_data['list'][217][1]['Nature of Violation'] ?? '';
$violation2State = $form_data['list'][217][1]['State'] ?? '';
$violation2Penalty = $form_data['list'][217][1]['Penalty'] ?? '';
$violation2Points = $form_data['list'][217][1]['Points'] ?? '';
$violation3Dt = $form_data['list'][217][2]['Date'] ?? '';
$violation3Nature = $form_data['list'][217][2]['Nature of Violation'] ?? '';
$violation3State = $form_data['list'][217][2]['State'] ?? '';
$violation3Penalty = $form_data['list'][217][2]['Penalty'] ?? '';
$violation3Points = $form_data['list'][217][2]['Points'] ?? '';

$accident1Dt = $form_data['list'][218][0]['Date'] ?? '';
$accident1Nature = $form_data['list'][218][0]['Nature of Accident'] ?? '';
$accident1Fatality = $form_data['list'][218][0]['No. of Deaths'] ?? '';
$accident1Injury = $form_data['list'][218][0]['No. of Injuries'] ?? '';
$accident1Spill = $form_data['list'][218][0]['Vehicle Type'] ?? '';
$accident2Dt = $form_data['list'][218][1]['Date'] ?? '';
$accident2Nature = $form_data['list'][218][1]['Nature of Accident'] ?? '';
$accident2Fatality = $form_data['list'][218][1]['No. of Deaths'] ?? '';
$accident2Injury = $form_data['list'][218][1]['No. of Injuries'] ?? '';
$accident2Spill = $form_data['list'][218][1]['Vehicle Type'] ?? '';
$accident3Dt = $form_data['list'][218][2]['Date'] ?? '';
$accident3Nature = $form_data['list'][218][2]['Nature of Accident'] ?? '';
$accident3Fatality = $form_data['list'][218][2]['No. of Deaths'] ?? '';
$accident3Injury = $form_data['list'][218][2]['No. of Injuries'] ?? '';
$accident3Spill = $form_data['list'][218][2]['Vehicle Type'] ?? '';

$alcohol = $form_data['field'][27] ?? '';
$alcoholDoc = $form_data['field'][219] ?? '';

// *** Medical Examiner ***
$medicalCard = $form_data['field'][221] ?? '';
$medicalRestrictions = $form_data['field'][222] ?? '';
$medicalNumber = $form_data['field'][223] ?? '';
$medicalDate = $form_data['field'][224] ?? '';
$medicalExpiration = $form_data['field'][225] ?? '';
$doctorName = $form_data['field'][226] ?? '';
$doctorAddress = $form_data['field'][227] ?? '';
$doctorPhone = $form_data['field'][228] ?? '';

$signature = $form_data['field'][229] ?? '';
$signDate = $form_data['field'][230] ?? '';

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RR Employment Application</title>
    <meta name="author" content="Lisa" />
    <style type="text/css">

        .p,
        p, li {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 6.5pt;
            margin: 0pt;
            padding: 0pt;
        }
        span {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
            margin: 0pt;
        }
        h1 {
            color: black;
            text-align: center;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 16pt;
        }
        h3 {
            color: black;
            font-family: Arial, sans-serif;
            font-weight: 400;
            text-decoration: none;
            font-size: 12pt;
        }
        ul li {
            display: block;
            margin-bottom: 10pt;
        }
        #l1 {
            padding-left: 0pt;
            counter-reset: c1 4;
        }
        #l1>li>*:first-child:before {
            counter-increment: c1;
            content: counter(c1, decimal)" ";
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }
        #l1>li:first-child>*:first-child:before {
            counter-increment: c1 0;
        }
        .section-title {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.5;
            width: 90%;
            margin: auto;
        }
        .table-grid {
            border-bottom:1px solid black;
        }
        .section-box {
            border-top:none;
            border-left:2px solid black;
            border-right:2px solid black;
            border-bottom:2px solid black;
        }
        .section-box.top {
            border-top:2px solid black;
        }
        .table-grid.top {
            border-top:1px solid black;
            border-bottom:none;
        }
        .table-grid.inner {
            border-top:none;
            border-bottom:none;
            border-right:1px solid black;
        }
        .entry {
            border-bottom: 1px solid black;
            margin-right: 10px;
        }
        .circle {
            border: 1px solid black; /* Creates the border */
            border-radius: 50%;    /* Makes it a circle */
        }
        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }
    </style>
</head>

<body>
    <div class="section-box top">
        <table cellspacing="0">
            <tr style="height:26pt">
                <td width="80%">
                    <br />
                    <p style="padding-left: 4pt;text-indent: 0pt;line-height: 10pt;text-align: left;font-size: 1em;">Wrecker Service, Inc.</p>
                </td>
                <td style="border-left:1px solid black;border-bottom:1px solid black;" width="19.9%">
                    <p style="padding-top: 5pt;padding-left: 8pt;">SSN <?php echo esc_html( $ssn ); ?>&nbsp;</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:26pt">
                <td width="80%">
                    <p style="padding-left: 1pt;">19431 Samuels Mill Court, Leesburg VA 20175</p>
                    <br />
                </td>
                <td width="19.9%">
                </td>
            </tr>
        </table>
        <table style="text-align:center;" cellspacing="0">
            <tr style="height:43pt">
                <td width="100%">
                    <br />
                    <h1 class="section-title">APPLICATION FOR EMPLOYMENT</h1>
                    <br />
                </td>
            </tr>
        </table>
    </div>
    <div class="section-box">
        <table cellspacing="0">
            <tr style="height:150pt">
                <td width="100%">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:21pt">
                <td width="50%" class="table-grid inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 6pt;text-align: left;">Name:
                        FIRST-MIDDLE-LAST (AS IT APPEARS ON SOCIAL SECURITY CARD)</p>
                        <span><?php echo esc_html( $fullName ); ?>&nbsp;</span>
                </td>
                <td width="30%" class="table-grid inner">
                    <p style="padding-left: 9pt;text-indent: 0pt;line-height: 6pt;text-align: left;">SOCIAL
                        SECURITY NO.</p>
                    <span><?php echo esc_html( $ssn ); ?>&nbsp;</span> 
                </td>
                <td width="20%">
                    <p style="text-indent: 0pt;line-height: 6pt;text-align: left;">TODAY&#39;S DATE</p>
                    <span><?php echo esc_html( $signDate ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:21pt">
                <td width="30%" class="table-grid inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 6pt;text-align: left;">FORMER NAME</p>
                    <span><?php echo esc_html( $formerName ); ?>&nbsp;</span> 
                </td>
                <td width="35%" class="table-grid inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 6pt;text-align: left;">HOME PHONE (AREA CODE)</p>
                        <span><?php echo esc_html( $homePhone ); ?>&nbsp;</span> 
                </td>
                <td width="35%">
                    <p style="padding-left: 9pt;text-indent: 0pt;line-height: 6pt;text-align: left;">DAY TIME PHONE (AREA CODE)</p>
                        <span><?php echo esc_html( $cellPhone ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:15pt">
                <td width="40%" class="table-grid inner">
                    <p style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">EMAIL ADDRESS:</p>
                        <span><?php echo esc_html( $email ); ?>&nbsp;</span> 
                </td>
                <td width="60%">
                    <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">DATE OF BIRTH: MM/DD/YYYY</p>
                        <span><?php echo esc_html( $dob ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
    </div>
    <div class="section-box">
        <table cellspacing="0">
            <tr style="height:7pt">
                <td width="100%">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:15pt">
                <td width="100%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">List below all address at which you have lived in the last five (5) year <i>start with your present address</i></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:15pt;">
                <td width="20%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;"></p>
                </td>
                <td width="20%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">STREET ADDRESS</p>
                </td>
                <td width="18%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">CITY</p>
                </td>
                <td width="12%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">STATE</p>
                </td>
                <td width="10%;">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">ZIP CODE</p>
                </td>
                <td width="10%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">FROM</p>
                </td>
                <td width="9.9%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">TO</p>
                </td>
            </tr>
            <tr style="height:15pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">PRESENT ADDRESS</p>
                    <span>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $AddrCty ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $AddrState ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $AddrZip ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $AddrDtFrom ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top">
                    <span>Present</span> 
                </td>
            </tr>
            <tr style="height:15pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">PREVIOUS ADDRESS</p>
                    <span>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr1 ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr1City ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr1State ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr1Zip ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr1DtFrom ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top">
                    <span><?php echo esc_html( $prevAddr1DtTo ) ?>&nbsp;</span> 
                </td>
            </tr>
            <tr style="height:15pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">PREVIOUS ADDRESS</p>
                    <span>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr2 ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr2City ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr2State ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr2Zip ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr2DtFrom ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top">
                    <span><?php echo esc_html( $prevAddr2DtTo ) ?>&nbsp;</span> 
                </td>
            </tr>
            <tr style="height:15pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">PREVIOUS ADDRESS</p>
                    <span>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr3 ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr3City ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr3State ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr3Zip ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr3DtFrom ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top">
                    <span><?php echo esc_html( $prevAddr3DtTo ) ?>&nbsp;</span> 
                </td>
            </tr>
            <tr style="height:15pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">PREVIOUS ADDRESS</p>
                    <span>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr4 ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr4City ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr4State ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr4Zip ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $prevAddr4DtFrom ) ?>&nbsp;</span> 
                </td>
                <td class="table-grid top">
                    <span><?php echo esc_html( $prevAddr4DtTo ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:15pt">
                <td width="100%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">DO NOT SHOW FOREIGN RESIDENCE IF IT MAY INDICATE NATIONAL ORIGIN, UNLESS HIRED.</p>
                    <br />
                </td>
            </tr>
        </table>
    </div>
    <div class="section-box">
        <table cellspacing="0">
            <tr style="height:184pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:184pt">
                <td width="100%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">SELECT THE JOB YOUR ARE APPLYING FOR - PLEASE CHECK ONLY ONE FROM THIS LIST.</p>
                    <br />
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:15pt">
                <td width="33.3%">    
                    <span style="margin-bottom:1%;"><input type="checkbox" <?php if ( $positionApply == "Yard Worker" ) { echo "checked=checked"; } ?>/>&nbsp;Yard worker</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Tow truck driver" ) { echo "checked=checked"; } ?>/>&nbsp;Tow truck driver</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Line Haul / Sleeper Driver" ) { echo "checked=checked"; } ?>/>&nbsp;Line Haul / Sleeper Driver</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Mechanic / Welder" ) { echo "checked=checked"; } ?>/>&nbsp;Mechanic / Welder</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Dispatcher" ) { echo "checked=checked"; } ?>/>&nbsp;Dispatcher</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Combination Driver/Yard Worker" ) { echo "checked=checked"; } ?>/>&nbsp;Combination Driver/Yard Worker</span>
                </td>
                <td width="33.3%">
                <span><input type="checkbox" <?php if ( $positionApply == "Management Trainee" ) { echo "checked=checked"; } ?>/>&nbsp;Management Trainee</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Customer Service/ Clerical" ) { echo "checked=checked"; } ?>/>&nbsp;Customer Service/ Clerical</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Intern" ) { echo "checked=checked"; } ?>/>&nbsp;Intern</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Sales Position" ) { echo "checked=checked"; } ?>/>&nbsp;Sales Position</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Accounting" ) { echo "checked=checked"; } ?>/>&nbsp;Accounting</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Other" ) { echo "checked=checked"; } ?>/>&nbsp;Other</span>
                </td>
                <td width="33.3%">  
                <span><input type="checkbox" <?php if ( $positionApply == "Clerical" ) { echo "checked=checked"; } ?>/>&nbsp;Manager</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Administrator" ) { echo "checked=checked"; } ?>/>&nbsp;Administrator</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Technical" ) { echo "checked=checked"; } ?>/>&nbsp;Technical</span>
                    <br />    
                    <span><input type="checkbox" <?php if ( $positionApply == "Clerical" ) { echo "checked=checked"; } ?>/>&nbsp;Clerical</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Accounting" ) { echo "checked=checked"; } ?>/>&nbsp;Accounting</span>
                    <br />
                    <span><input type="checkbox" <?php if ( $positionApply == "Other" ) { echo "checked=checked"; } ?>/>&nbsp;Other</span>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:15pt">
                <td width="20%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">WHAT RATE OF PAY DO YOU EXPECT</p>
                </td>
                <td width="20%" class="entry">
                    <span><?php echo esc_html( $expectedRate ) ?>&nbsp;</span> 
                </td>
                <td width="25%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">IF HIRED WHEN COULD YOU BEGIN TO WORK</p>
                </td>
                <td width="20%" class="entry">
                    <span><?php echo esc_html( $StartDate ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:15pt">
                <td width="25%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">DESCRIBE THE TYPE OF WORK YOU WANT</p>
                </td>
                <td width="20%">
                    <p><input type="checkbox" <?php if ( $workType == "Full Time" ) { echo "checked=checked"; } ?>/>&nbsp;FULL TIME</p>
                </td>
                <td width="20%">
                    <p><input type="checkbox" <?php if ( $workType == "On Call" ) { echo "checked=checked"; } ?>/>&nbsp;ON CALL</p>
                </td>
                <td width="20%">
                    <p><input type="checkbox" <?php if ( $workType == "Part Time" ) { echo "checked=checked"; } ?>/>&nbsp;PART TIME</p>
                </td>
                <td width="15%">
                    <p><input type="checkbox" <?php if ( $workType == "Any of These" ) { echo "checked=checked"; } ?>/>&nbsp;ANY OF THESE</p>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:15pt">
                <td width="50%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">AVAILABILITY</p>
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">ARE YOU ABLE TO WORK ANY DAY OF THE WEEK AND ANY SHIFT DURING THE DAY</p>
                <td width="10%">
                    <p><input type="checkbox" <?php if ( $shift == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES</p>
                </td>
                <td width="10%">
                    <p><input type="checkbox" <?php if ( $shift == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:15pt">
                <td width="45%">
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">IF NO, WHAT DAY(S) OF THE WEEK OR SHIFT(S) DURING THE DAY CAN YOU WORK?
                    </p>
                </td>
                <td width="50%">
                    <span><?php echo esc_html( $shiftException ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:3pt">
                <td width="100%">
                </td>
            </tr>
        </table>
    </div>
    <div class="section-box">
        <table cellspacing="0">
            <tr style="height:3pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:111pt">
                <td width="10%">
                    <p style="padding-left: 296pt;padding-right: 45pt;text-indent: -288pt;line-height: 118%;text-align: left;">EDUCATION</p>
                </td>
                <td width="15%">
                    <p style="padding-left: 296pt;padding-right: 45pt;text-indent: -288pt;line-height: 118%;text-align: left;"></p>
                </td>
                <td width="20%">
                    <p style="padding-left: 296pt;padding-right: 45pt;text-indent: -288pt;line-height: 118%;text-align: left;">CIRCLE HIGHEST LEVEL ACHIEVED</p>
                </td>
                <td width="15%">
                    <p style="padding-left: 296pt;padding-right: 45pt;text-indent: -288pt;line-height: 118%;text-align: left;">GRADUATED /GED<br />YES / NO</p>
                </td>
                <td width="10%">
                    <p style="padding-left: 296pt;padding-right: 45pt;text-indent: -288pt;line-height: 118%;text-align: left;">MAJOR</p>
                </td>
                <td width="20%">
                    <p style="padding-left: 296pt;padding-right: 45pt;text-indent: -288pt;line-height: 118%;text-align: left;">DEGREE RECEIVED</p>
                </td>
            </tr>
            <tr style="height:111pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 8pt;text-align: left;">ELEMENTARY</p>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $elemSchool ) ?>&nbsp;</span> 
                </td>
                <td>
                <?php 
                // Loop through grades 1 to 6
                for ($grade = 1; $grade <= 6; $grade++) {
                    if ($elemSchoolLevel == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 6) {
                        echo ' ';
                    }
                }
                ?>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $elemSchoolGrad ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $elemSchoolMajor ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $elemSchoolDegree ) ?>&nbsp;</span>
                </td>
            </tr>
            <tr style="height:111pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 8pt;text-align: left;">JR/SR HIGH SCHOOL</p>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $highSchool ) ?>&nbsp;</span> 
                </td>
                <td>
                <?php 
                // Loop through grades 7 to 12
                for ($grade = 7; $grade <= 12; $grade++) {
                    if ($highSchoolLevel == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 12) {
                        echo ' ';
                    }
                }
                ?>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $highSchoolGrad ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $highSchoolMajor ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $highSchoolDegree ) ?>&nbsp;</span>
                </td>
            </tr>
            <tr style="height:111pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 8pt;text-align: left;">TECHNICAL SCHOOL (NAME)</p>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $techSchool ) ?>&nbsp;</span> 
                </td>
                <td style="text-align:center;">
                <?php 
                // Loop through grades 1 to 4
                for ($grade = 1; $grade <= 4; $grade++) {
                    if ($techSchoolLevel == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 4) {
                        echo ' ';
                    }
                }
                ?>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $techSchoolGrad ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $techSchoolMajor ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $techSchoolDegree ) ?>&nbsp;</span>
                </td>
            </tr>
            <tr style="height:111pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 8pt;text-align: left;">COLLEGE (NAME)</p>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college1 ) ?>&nbsp;</span> 
                </td>
                <td style="text-align:center;">
                <?php 
                // Loop through grades 1 to 4
                for ($grade = 1; $grade <= 4; $grade++) {
                    if ($college1Level == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 4) {
                        echo ' ';
                    }
                }
                ?>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college1Grad ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college1Major ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college1Degree ) ?>&nbsp;</span>
                </td>
            </tr>
            <tr style="height:111pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 8pt;text-align: left;">COLLEGE (NAME)</p>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college2 ) ?>&nbsp;</span> 
                </td>
                <td style="text-align:center;">
                <?php 
                // Loop through grades 1 to 4
                for ($grade = 1; $grade <= 4; $grade++) {
                    if ($college2Level == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 4) {
                        echo ' ';
                    }
                }
                ?>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college2Grad ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college2Major ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $college2Degree ) ?>&nbsp;</span>
                </td>
            </tr>
            <tr style="height:111pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 8pt;text-align: left;">OTHER</p>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $otherSchool ) ?>&nbsp;</span> 
                </td>
                <td style="text-align:center;">
                <?php 
                // Loop through grades 1 to 4
                for ($grade = 1; $grade <= 4; $grade++) {
                    if ($otherLevel == (string)$grade) {
                        echo '<span class="circle">' . $grade . '</span>';
                    } else {
                        echo '<span>' . $grade . '</span>';
                    }
                    // Add a space after each grade except the last one
                    if ($grade < 4) {
                        echo ' ';
                    }
                }
                ?>
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $otherSchoolGrad ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $otherSchoolMajor ) ?>&nbsp;</span> 
                </td>
                <td class="entry">
                    <span><?php echo esc_html( $otherSchoolDegree ) ?>&nbsp;</span>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;margin-top:1%;" cellspacing="0">
            <tr style="height:3pt">
                <td width="100%">
                </td>
            </tr>
        </table>
    </div>
    <div class="section-box">
        <table cellspacing="0">
            <tr style="height:10pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:7pt">
                <td width="25%">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 118%;text-align: left;">
                        HAVE YOU PREVIOUSLY APPLIED AT OR BEEN<br />
                        EMPLOYED BY UNDER<br />
                        YOUR PRESENT OR ANY OTHER NAME
                    </p>
                </td>
                <td width="10%">
                    <p><input type="checkbox" <?php if ( $appliedPrev == "Applied" ) { echo "checked=checked"; } ?>/>&nbsp;APPLIED</p>
                    <p><input type="checkbox" <?php if ( $appliedPrev == "Employed" ) { echo "checked=checked"; } ?>/>&nbsp;EMPLOYED</p>
                    <p><input type="checkbox" <?php if ( $appliedPrev == "Neither" ) { echo "checked=checked"; } ?>/>&nbsp;NEITHER</p>
                </td>
                <td width="35%">
                    <p>INDICATE NAME USED WHEN APPLYING OR EMPLOYED</p>
                    <span><?php echo esc_html( $appliedName ) ?>&nbsp;</span>
                    <p>&nbsp;</p> 
                </td>
                <td width="15%">
                    <p style="padding-left: 12pt;padding-right: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">
                        ARE YOU AT LEAST<br />
                        18 YEARS <input type="checkbox" <?php if ( $over18 == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        OF AGE <input type="checkbox" <?php if ( $over18 == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
                <td width="15%">
                    <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        IF NO<br />
                        STATE<br />
                        YOUR AGE: <?php echo esc_html( $under18Age ) ?>&nbsp;
                    </p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:9pt">
                <td width="20%" class="table-grid inner">
                    <p style="padding-top: 3pt;text-indent: 0pt;text-align: left;"></p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-top: 3pt;text-indent: 0pt;text-align: left;"></p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 7pt;padding-right: 10pt;text-indent: 0pt;line-height: 8pt;text-align: left;">DATE</p>
                </td>
                <td width="60%" style="border-bottom:1px solid black;">
                    <p style="padding-top: 2pt;padding-left: 4pt;text-indent: 0pt;line-height: 5pt;text-align: left;">IF PREVIOUSLY EMPLOYED BY COMPLETE THIS SECTION</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:7pt">
                <td width="20%" class="table-grid inner">
                    <p style="padding-left: 14pt;text-indent: 0pt;line-height: 5pt;text-align: left;">POSITION HELD OR APPLIED FOR</p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 1pt;text-indent: 0pt;line-height: 5pt;text-align: left;">LOCATION</p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 9pt;text-indent: 0pt;line-height: 5pt;text-align: left;">APPLIED</p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 4pt;text-indent: 0pt;line-height: 5pt;text-align: left;">DATE HIRED</p>
                </td>
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 4pt;text-indent: 0pt;line-height: 5pt;text-align: left;">DATE LEFT</p>
                </td>
                <td width="35%">
                    <p style="padding-left: 42pt;text-indent: 0pt;line-height: 5pt;text-align: left;">REASON FOR LEAVING</p>
                </td>
            </tr>
            <tr>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $appliedPosition ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $appliedLocation ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $appliedDate ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $hiredDate ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $leaveDate ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top" style="border-botom:none;">
                    <span><?php echo esc_html( $leaveReason ) ?>&nbsp;</span>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:7pt">
                <td width="20%">
                    <p style="text-indent: 0pt;text-align: left;"><span /></p>
                </td>
                <td width="10%">
                    <p style="text-indent: 0pt;text-align: left;"><span /></p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="text-indent: 0pt;text-align: left;"><span /></p>
                </td>
                <td width="20%" class="table-grid inner">
                    <p style="padding-left: 4pt;text-indent: 0pt;line-height: 5pt;text-align: left;">WHO? FIRST AND LAST NAMES</p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 5pt;text-align: left;">POSITION</p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 5pt;text-align: left;">LOCATION</p>
                </td>
                <td width="19.9%">
                    <p style="padding-left: 9pt;text-indent: 0pt;line-height: 5pt;text-align: left;">RELATIONSHIP</p>
                </td>
            </tr>
            <tr style="height:7pt">
                <td>
                    <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">DO YOU KNOW ANYONE EMPLOYED<br />WRECKER INC.</p>
                </td>
                <td>
                    <p style="text-indent: 0pt;text-align: left;"><span /></p>
                </td>
                <td class="table-grid inner">
                    <p>
                        <input type="checkbox" <?php if ( $friend == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $friend == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $friendName ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $friendPosition ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $friendLocation ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top">
                    <span><?php echo esc_html( $friendLocation ) ?>&nbsp;</span>
                </td>
            </tr>
            <tr style="height:7pt">
                <td class="table-grid top">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 5pt;text-align: left;">
                        ARE YOU RELATED BY BLOOD<br />
                        OR MARRIAGE TO ANYONE<br />
                        EMPLOYED BY WRECKER INC.
                    </p>
                </td>
                <td class="table-grid top">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td class="table-grid top inner">
                    <p>
                        <input type="checkbox" <?php if ( $relative == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $relative == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $relativeName ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $relativePosition ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top inner">
                    <span><?php echo esc_html( $relativeLocation ) ?>&nbsp;</span>
                </td>
                <td class="table-grid top">
                    <span><?php echo esc_html( $relativeLocation ) ?>&nbsp;</span>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:22pt">
                <td width="30%">
                    <p style="padding-top: 5pt;padding-left: 7pt;padding-right: 368pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        PROVIDE THE NAME OF THE INDIVIDUAL OR<br />
                        ORGANIZATION THAT REFERRED YOU:
                    </p>
                </td>
                <td width="70%">
                    <span><?php echo esc_html( $referred ) ?>&nbsp;</span>
                </td>
            </tr>
        </table>
    </div>
    <!-- PAGE -->
    <div class="section-box">
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:17pt">
                <td width="80%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;">NAME: FIRST-MIDDLE-LAST AS IT APPEARS ON YOUR SOCIAL SECURITY CARD</p>
                </td>
                <td width="19.9%">
                    <span><?php echo esc_html( $fullName ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:51pt">
                <td width="100%" >
                    <p style="padding-left: 1pt;padding-right: 24pt;text-indent: 0pt;line-height: 110%;text-align: left;">
                        *<b>EMPLOYMENT, EDUCATION, AND MILITARY RECORD, ETC.:</b> LIST PRESENT AND ALL PREVIOUS EMPLOYMENT, MILITARY SERVICE AND <br />
                        EDUCATIONAL EXPERIENCE DURING THE PAST TEN (10) YEARS. INCLUDE ALL PERIODS OF UNEMPLOYMENT LASTING SIX MONTHS OR MORE.
                    </p>
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PRESENT EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp1Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp1Hired ) ?>&nbsp;</span> 
                </td>
                <td width="41%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">May we contact your current employer
                        <input type="checkbox" <?php if ( $emp1Contact == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES
                        <input type="checkbox" <?php if ( $emp1Contact == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp1Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp1AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp1AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp1AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp1AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp1AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp1Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp1Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp1Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp1Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp1FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp1CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp2Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp2Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp2Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp2Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp2AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp2AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp2AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp2AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp2AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp2Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp2Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp2Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp2Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp2Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp2FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp2CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp3Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp3Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp3Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp3Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp3AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp3AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp3AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp3AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp3AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp3Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp3Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp3Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp3Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp3Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp3FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp3CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp4Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp4Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp4Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp4Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp4AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp4AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp4AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp4AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp4AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp4Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp4Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp4Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp4Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp4Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp4FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp4CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp5Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp5Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp5Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp5Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp5AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp5AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp5AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp5AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp5AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp5Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp5Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp5Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp5Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp5Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp2FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp5CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
    </div>
    <table cellspacing="0">
        <tr style="height:51pt">
            <td width="100%">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p style="padding-left: 1pt;padding-right: 24pt;text-indent: 0pt;line-height: 110%;text-align: left;">
                        <i>
                            *The Federal Motor Carrier Safety Regulations (49 CFR 391.21) require that all applicants wishing to drive a commercial vehicle list all employment for the last three (3) years. In
                        addition, if you have driven a commercial vehicle previously, you must provide employment history for an additional seven (7) years (for a total of ten (10) years). Any gaps in
                        employment excess of one (1) month must be explained.
                        </i>
                    </p>
            </td>
        </tr>
    </table>
    <pagebreak/>
    <!-- PAGE -->
    <div class="section-box">
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:17pt">
                <td width="80%" class="text-grid inner">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;">NAME: FIRST-MIDDLE-LAST AS IT APPEARS ON YOUR SOCIAL SECURITY CARD</p>
                </td>
                <td width="19.9%" class="text-grid inner">
                    <span><?php echo esc_html( $fullName ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black" cellspacing="0">
            <tr style="height:3pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp6Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp6Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp6Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp6Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp6AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp6AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp6AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp6AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp6AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp6Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp6Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp6Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp6Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp6Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp6FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp6CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp7Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp7Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp7Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp7Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp7AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp7AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp7AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp7AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp7AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp7Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp7Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp7Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp7Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp7Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp7FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp7CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp8Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp8Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp8Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp8Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp8AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp8AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp8AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp8AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp8AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp8Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp8Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp8Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp8Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp8Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp8FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp8CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp9Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp9Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp9Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp9Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp9AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp9AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp9AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp9AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp9AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp9Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp9Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp9Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp9Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp9Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp9FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp9CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">FORMER EMPLOYER</p>
                </td>
                <td width="25%" class="entry">
                        <span><?php echo esc_html( $emp10Name ) ?>&nbsp;</span> 
                </td>
                <td width="12%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR HIRED:</p>
                </td>
                <td width="10%" class="entry">
                        <span><?php echo esc_html( $emp10Hired ) ?>&nbsp;</span> 
                </td>
                <td width="15%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">MONTH/YEAR SEPARATED</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp10Separated) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p></p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="8%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COMPANYNAME</p>
                </td>
                <td width="91%" class="entry">
                    <span><?php echo esc_html( $emp10Company ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ADDRESS</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp10AddrSt1 ) ?>&nbsp;</span> 
                </td>
                <td width="5.5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="48%" class="entry">
                    <span><?php echo esc_html( $emp10AddrSt2 ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="3%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">CITY</p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $emp10AddrCity ) ?>&nbsp;</span> 
                </td>
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">STATE</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp10AddrState ) ?>&nbsp;</span> 
                </td>
                <td width="2%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">ZIP</p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $emp10AddrZip ) ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">COUNTY</p>
                </td>
                <td width="25%" class="entry">
                    <span>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="4%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">PHONE</p>
                </td>
                <td width="35%" class="entry">
                    <span><?php echo esc_html( $emp10Phone ) ?>&nbsp;</span> 
                </td>
                <td width="17%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">SUPERVISOR NAME AND TITLE</p>
                </td>
                <td width="43%" class="entry">
                <span><?php echo esc_html( $emp10Supervisor ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">TYPE OF BUSINESS</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp10Business ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="9%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">YOUR POSITION</p>
                </td>
                <td width="90%" class="entry">
                    <span><?php echo esc_html( $emp10Position ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="11%">
                    <p style="padding-top: 5pt;padding-left: 9pt;padding-right: 44pt;text-indent: 0pt;line-height: 13pt;text-align: left;">Reason for Leaving</p>
                </td>
                <td width="88%" class="entry">
                    <span><?php echo esc_html( $emp10Reason ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:113pt">
                <td width="100%">
                    <p style="padding-left: 7pt;padding-right: 24pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <i>Drivers only: While employed here, were you subject to Motor Carrier Safety Regulations?</i>
                        <span style="width:15%" class="entry"><?php echo esc_html( $emp2FMCSR ) ?>&nbsp;</span> 
                        <i>Was the job designated as a safety-sensitive function in any Department of Transportation-regulated mode subject to alcohol and controlled
                        substance testing as required by 49 CFR, Part 40?</i>
                        <span width="15%" class="entry"><?php echo esc_html( $emp5CFR ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;margin-top:1%;" cellspacing="0">
            <tr style="height:3pt">
                <td width="100%" class="entry">
                    <h4>ANY OTHER NOTES REGARDING PREVIOUS EMPLOYMENT:</h4> 
                </td>
            </tr>
            <tr style="height:3pt">
                <td width="100%" class="entry">
                    <span><?php echo esc_html( $empOtherNotes ) ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
    </div>
    <!--
    <table cellspacing="0">
        <tr width="100%" style="height:51pt">
            <td>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p style="padding-left: 1pt;padding-right: 24pt;text-indent: 0pt;line-height: 110%;text-align: left;">
                    <i>
                        *The Federal Motor Carrier Safety Regulations (49 CFR 391.21) require that all applicants wishing to drive a commercial vehicle list all employment for the last three (3) years. In
                    addition, if you have driven a commercial vehicle previously, you must provide employment history for an additional seven (7) years (for a total of ten (10) years). Any gaps in
                    employment excess of one (1) month must be explained.
                    </i>
                </p>
            </td>
        </tr>
    </table>
            -->
    <pagebreak/>
    <div class="section-box">
    <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:17pt">
                <td width="25%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                </td>
                <td width="50%" style="border-left:1px solid black;border-right:1px solid black;padding-left: 25pt;">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;">NAME: FIRST-MIDDLE-LAST AS IT APPEARS ON YOUR SOCIAL SECURITY CARD</p>
                </td>
                <td width="25%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                </td>
            </tr>
            <tr style="height:17pt;">
                <td>
                    <span></span> 
                </td>
                <td style="border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;padding-left: 25pt;">
                    <span style="text-indent: 0pt;line-height: 8pt;text-align: left;"><?php echo esc_html( $fullName ); ?>&nbsp;</span> 
                </td>
                <td>
                    <span></span> 
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:14pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:56pt">
                <td width="40%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        Have you ever served in the U.S. Military or Armed Forces?
                    </p>
                </td>
                <td width="10%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        <input type="checkbox" <?php if ( $military == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES
                    </p>
                </td>
                <td width="10%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        <input type="checkbox" <?php if ( $military == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
                <td width="11%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        If yes, what branch
                    </p>
                </td>
                <td width="25%" class="entry">
                    <span><?php echo esc_html( $militaryBranch ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table><table cellspacing="0">
            <tr style="height:56pt">
                <td width="13%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        Your primary specialty:
                    </p>
                </td>
                <td width="17%" class="entry">
                    <span><?php echo esc_html( $militarySpecialty ); ?>&nbsp;</span> 
                </td>
                <td width="11%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        Rank at discharge:
                    </p>
                </td>
                <td width="19%" class="entry">
                    <span><?php echo esc_html( $militaryRank ); ?>&nbsp;</span> 
                </td>
                <td width="10%">
                    <p style="padding-top: 8pt;padding-left: 8pt;padding-right: 117pt;text-indent: 0pt;line-height: 176%;text-align: left;">
                        Type of Discharge
                    </p>
                </td>
                <td width="19%" class="entry">
                    <span><?php echo esc_html( $militaryDischarge ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
    </div>
    <div class="section-box">
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:15pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:88pt">
                <td width="100%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        Have you ever been convicted of a crime involving alcohol or other controlled substance, arson, explosives, firearms, or other weapons, sexual misconduct, 
                    </p>  
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:88pt">
                <td width="50%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        theft, dishonesty, threats, or violence under your current or any other name? 
                    </p>  
                </td>
                <td width="10%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $alcohol == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $alcohol == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>  
                </td>
                <td width="20%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        Yes If yes describe below
                    </p>  
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:88pt">
                <td width="70%">
                    <p style="text-indent: 0pt;text-align: left;"><span /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        <i>Note: A conviction will not necessarily prevent you from being offered employment.</i>
                    </p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:88pt">
                <td width="5%">
                    <p style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Offense:</p>
                </td>
                <td width="50%" class="entry">
                    <span><?php echo esc_html( $crimOffense1 ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:88pt">
                <td width="9%">
                    <p style="padding-left: 8pt;text-indent: 0pt;text-align: left;">Date Convicted:</p>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $crimOffense1Date ); ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Penalty</p>
                </td>
                <td width="30%" class="entry">
                    <span><?php echo esc_html( $crimOffense1Penalty ); ?>&nbsp;</span> 
                </td>
                <td width="7%">
                    <p style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Disposition:</p>
                </td>
                <td width="20%" class="entry">
                    <span><?php echo esc_html( $crimOffense1Disposition ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:10pt">
                <td width="20%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Occurred in the workplace:</p>
                </td>
                <td width="20%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $crimOffense1Workplace == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES
                        <input type="checkbox" <?php if ( $crimOffense1Workplace == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>  
                </td>
                <td width="21.5%">
                    <p style="padding-left: 3pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Name under which you were convicted</p>
                </td>
                <td width="20%" class="entry">
                    <span><?php echo esc_html( $crimOffense1Name ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:88pt">
                <td width="5%">
                    <p style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Offense:</p>
                </td>
                <td width="50%" class="entry">
                    <span><?php echo esc_html( $crimOffense2 ); ?>&nbsp;</span> 
                </td>
                <td width="45%">
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:88pt">
                <td width="9%">
                    <p style="padding-left: 8pt;text-indent: 0pt;text-align: left;">Date Convicted:</p>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $crimOffense2Date ); ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Penalty</p>
                </td>
                <td width="30%" class="entry">
                    <span><?php echo esc_html( $crimOffense2Penalty ); ?>&nbsp;</span> 
                </td>
                <td width="7%">
                    <p style="padding-top: 7pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Disposition:</p>
                </td>
                <td width="20%" class="entry">
                    <span><?php echo esc_html( $crimOffense2Disposition ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:10pt">
                <td width="20%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Occurred in the workplace:</p>
                </td>
                <td width="20%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $crimOffense2Workplace == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES
                        <input type="checkbox" <?php if ( $crimOffense2Workplace == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>  
                </td>
                <td width="21.5%">
                    <p style="padding-left: 3pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Name under which you were convicted</p>
                </td>
                <td width="20%" class="entry">
                    <span><?php echo esc_html( $crimOffense2Name ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <br />
        <!-- YARD WORKERS -->
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:21pt">
                <td width="100%">
                    <h4 style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">Yard Workers Only</h4>
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:11pt">
                <td width="20%">
                    <p  style="padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        Do you have a commercial Driver’s License (CDL)?
                    </p>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $cdl == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $cdl == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
                <td width="25%" class="table-grid inner">
                    <p style="padding-left: 4pt;text-indent: 0pt;text-align: left;">Operators License Number</p>
                    <span><?php echo esc_html( $cdlNumber ); ?>&nbsp;</span> 
                </td>
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">State</p>
                    <span><?php echo esc_html( $cdlState ); ?>&nbsp;</span> 
                </td>
                <td width="29.9%">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">Expiration Date</p>
                    <span><?php echo esc_html( $cdlExpiration ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:11pt">
                <td width="12%" class="table-grid inner" >
                    <p  style="padding-left: 8pt;text-indent: 0pt;text-align: left;">Indicate years of experience in each category shown.</p>
                </td>
                <td width="20%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Lift Truck - electric</p>  
                    <span><?php echo esc_html( $yardElectric ); ?>&nbsp;</span>
                </td>
                <td width="18%" class="table-grid inner">
                    <p style="padding-left: 4pt;text-indent: 0pt;text-align: left;">Lift Truck - gas</p>
                    <span><?php echo esc_html( $yardGas ); ?>&nbsp;</span>
                </td>
                <td width="20%" class="table-grid inner">
                    <p style="padding-left: 4pt;text-indent: 0pt;text-align: left;">Freight Handler</p>
                    <span><?php echo esc_html( $yardFreight ); ?>&nbsp;</span>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">OTHER</p>
                    <span><?php echo esc_html( $yardOther ); ?>&nbsp;</span>
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">Checker</p>
                    <span><?php echo esc_html( $yardChecker ); ?>&nbsp;</span>
                </td>
                <td width="9.9%">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">OTHER</p>
                    <span><?php echo esc_html( $yardOther ); ?>&nbsp;</span>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:42pt">
                <td width="30%">
                    <p style="padding-top: 5pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        Indicate any other related work experience:
                    </p>
                    <span><br /></span>
                    <span><br /></span>
                    <span><br /></span>
                </td>
                <td width="69.9%" class="field">
                    <span><?php echo esc_html( $yardExperience ); ?>&nbsp;</span>
                    <span><br /></span>
                    <span><br /></span>
                    <span><br /></span>
                </td>
            </tr>
        </table>
        <!-- GARAGE APPLICANTS -->
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:14pt">
                <td style="width:572pt;" colspan="15">
                    <h4 style="padding-left: 9pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Garage Applicants Only
                    </h4>
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="10%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">
                        Have you had Auto Shop Experience
                    </p>
                </td>
                <td width="5%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $autoShop == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $autoShop == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
                <td width="10%">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">No of Years</p>
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;"></p>
                    <span><?php echo esc_html( $autoShopYears ); ?>&nbsp;</span> 
                </td>
                <td width="10%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">
                        Have you had Truck Stop Experience
                    </p>
                </td>
                <td width="5%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $truckStop == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $truckStop == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p> 
                </td>
                <td width="10%" class="table-grid inner">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">Years Gas</p>
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;"></p>
                    <span><?php echo esc_html( $truckStopGas ); ?>&nbsp;</span> 
                </td>
                <td width="16%" class="table-grid inner">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">Years Diesel</p>
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;"></p>
                    <span><?php echo esc_html( $truckStopDiesel ); ?>&nbsp;</span>
                </td>
                <td width="33.9%">
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;">Show Your Area(s) of<br /> Specialization Below:</p>
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;"></p>
                    <p style="padding-left: 3pt;text-indent: 0pt;text-align: left;"></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Training</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Experience</p>
                </td>
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Training</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Experience</p>
                </td>
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Training</p>
                </td>
                <td width="9.9%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Experience</p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><b>Equipment</b></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><b>Equipment</b></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><b>Equipment</b></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Wood Working</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $woodTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $woodTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $woodExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $woodExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Body Work</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $bodyTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $bodyTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $bodyExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $bodyExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Oxyacetylene Welder</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $oxyTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $oxyTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $oxyExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $oxyExperience ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Sheet Metal</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $sheetTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $sheetTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $sheetExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $sheetExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Elec & Ignition</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $elecTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $elecTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $elecExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $elecExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Paint Spray Gun</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $paintTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $paintTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $paintExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $paintExperience ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Clutch Rebuilding</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $clutchTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $clutchTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $clutchExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $clutchExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Engine Rebuilding</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $engineTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $engineTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $engineExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $engineExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Air Brakes</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $brakeTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $brakeTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $brakeExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $brakeExperience ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Differential Rebuilding</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $diffTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $diffTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $diffExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $diffExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Diesel Injection</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $dieselTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $dieselTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $dieselExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $dieselExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Other:</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $otherTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $otherTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $otherExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $otherExperience ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Transmission Rebuilding</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $transTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $transTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $transExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $transExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Electric Welder</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $weldTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $weldTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $weldExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $weldExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Other:</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $otherTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $otherTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $otherExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $otherExperience ); ?>&nbsp;</span></p>
                </td>
            </tr>
        </table>
        <!-- CLERICAL & ADMINISTRATIVE APPLICANTS -->
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:14pt">
                <td width="100%">
                </td>
            </tr>
            <tr style="height:104pt">
                <td width="100%">
                    <h4 style="padding-left: 9pt;text-indent: 0pt;line-height: 13pt;text-align: left;">
                        Clerical and Administrative Only
                    </h4>
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="100%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">
                        Place a check next to all the skills or types of work in which you have had training or experience<br />
                        indicate the number of years training/experience for each skill/type of work.
                    </p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Training</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Experience</p>
                </td>
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Training</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Experience</p>
                </td>
                <td width="15%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">&nbsp;</p>
                </td>
                <td width="9%" class="table-grid inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Training</p>
                </td>
                <td width="9.9%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Experience</p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><b>Skill</b></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><b>Skill</b></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><b>Skill</b></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">X</p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">YRS.</p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Typing WPM</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $wpmTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $wpmTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $wpmExperience> 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $wpmExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Dispatch</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $dispatchTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $dispatchTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $dispatchExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $dispatchExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Cashier</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $cashierTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $cashierTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $cashierExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $cashierExperience ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Shorthand WPM</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $shorthandTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $shorthandTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $shorthandExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $shorthandExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Switch Board</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $switchBoardTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $switchBoardTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $switchBoardExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $switchBoardExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $nothing > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $nothing > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Computer Word Processing</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $wpmTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $wpmTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $wpmExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $wpmExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Accounts Payable</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $payableTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $payableTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $payableExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $payableExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $nothing > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $nothing > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Computer Spread Sheet</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $sheetTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $sheetTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $sheetExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $sheetExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Accounts Receivable</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $receivableTraining > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $receivableTraining ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $receivableExperience > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $receivableExperience ); ?>&nbsp;</span></p>
                </td>
                <td width="15%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;</p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $nothing > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                </td>
                <td width="2%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php if ( $nothing > 0 ) { echo "X"; } ?>&nbsp;</span></p>
                </td>
                <td width="7.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:42pt">
                <td width="70%">
                    <p style="padding-top: 5pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">
                        LIST THE COMPUTER PROGRAMS AND EQUIPMENT WITH WHICH YOU ARE FAMILIAR:
                    </p>
                    <span><br /></span>
                    <span><br /></span>
                    <span><br /></span>
                </td>
                <td width="29.9%" class="field">
                    <span><?php echo esc_html( $computerPrograms ); ?>&nbsp;</span>
                    <span><br /></span>
                    <span><br /></span>
                    <span><br /></span>
                </td>
            </tr>
        </table>
    </div>
    <!-- DRIVER PAGE -->
    <pagebreak/>
    <div class="section-box">
    <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:17pt">
                <td width="25%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                </td>
                <td width="50%" style="border-left:1px solid black;border-right:1px solid black;padding-left: 25pt;">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;">NAME: FIRST-MIDDLE-LAST AS IT APPEARS ON YOUR SOCIAL SECURITY CARD</p>
                </td>
                <td width="25%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                </td>
            </tr>
            <tr style="height:17pt;">
                <td>
                    <span></span> 
                </td>
                <td style="border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;padding-left: 25pt;">
                    <span style="text-indent: 0pt;line-height: 8pt;text-align: left;"><?php echo esc_html( $fullName ); ?>&nbsp;</span> 
                </td>
                <td>
                    <span></span> 
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:21pt">
                <td width="100%">
                    <h4 style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">DRIVER APPLICATION ONLY</h4>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:117pt">
                <td width="60%" >
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                    <br />
                </td>
                <td width="10%" style="border-left:1px solid black;border-top:1px solid black;border-bottom:1px solid black;padding-left: 15pt;">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Date of Birth</p>
                    <br />
                </td>
                <td width="29.9%" style="border-top:1px solid black;border-bottom:1px solid black;padding-left: 15pt;">
                    <span style="text-indent: 0pt;line-height: 8pt;text-align: left;"><?php if ( $positionApply == "Tow truck driver" || $positionApply == "Line Haul / Sleeper Driver" || $positionApply == "Combination Driver/Yard Worker" ) { echo esc_html( $dob ); } ?>&nbsp;</span> 
                    <br />
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:21pt">
                <td width="100%">
                    <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">*********All driver applicants must attach a current copy of your driving record. The record should be no older than 15 days.*********</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:8pt">
                <td width="50%">
                    <table style="border-top:1px solid black;" cellspacing="0">
                        <tr style="height:4pt">
                            <td width="70%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                                    State number of years driving<br />
                                    experience in each category
                                </p>
                            </td>
                            <td width="30%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                                    List states<br />
                                    You have
                                </p>
                            </td>
                        </tr>
                        <tr style="height:118pt">
                            <td width="60%">
                                <table style="border-top:1px solid black;" cellspacing="0">
                                    <tr style="height:8pt">
                                        <td width="30%" class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Type of</p>
                                        </td>
                                        <td width="25%" class="table-grid top">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Years Experi</p>
                                        </td>
                                        <td width="25%" class="table-grid top inner">
                                            <p>ence</p>
                                        </td>
                                        <td width="20%" class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Other</p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Vehicle</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Gas</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Diesel</p>
                                        </td>
                                        <td class="table-grid inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Straight Truck</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $straightTruckGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $straightTruckDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $straightTruckOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner" style="line-height: 1pt;">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Tow Truck</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $truckGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $truckDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $truckOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Roll Back</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $rollBackGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $rollBackDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $rollBackOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Light Duty</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lightDutyGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lightDutyDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lightDutyOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Medium Duty</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $mediumDutyGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $mediumDutyDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $mediumDutyOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Heavy Duty</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $heavyDutyGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $heavyDutyDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $heavyDutyOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Tractor Trailer</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Double</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerDoubleGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerDoubleDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerDoubleOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Single</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerSingleGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerSingleDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerSingleOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height:8pt">
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">&nbsp;&nbsp;Triple</p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerTripleGas ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerTripleDiesel ); ?>&nbsp;</span></p>
                                        </td>
                                        <td class="table-grid top inner">
                                            <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $trailerTripleOther ); ?>&nbsp;</span></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="40%" class="table-grid inner">
                                <span><?php echo esc_html( $states ); ?>&nbsp;</span>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="50%">
                    <table cellspacing="0">
                        <tr style="height:21pt">
                            <td width="100%">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">List unexpired personal and Commercial Drivers Licenses or Permits</p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-top:1px solid black;border-left:1px solid black;" cellspacing="0">
                        <tr style="height:8pt">
                            <td width="35%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">License Number</p>
                            </td>
                            <td width="15%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">State</p>
                            </td>
                            <td width="20%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Issued</p>
                            </td>
                            <td width="20%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Expires</p>
                            </td>
                            <td width="10%" class="table-grid top inner">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"></p>
                            </td>
                        </tr>
                        <tr style="height:8pt">
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license1Num ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license1State ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license1Iss ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license1Exp ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr style="height:8pt">
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license2Num ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license2State ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license2Iss ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license2Exp ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                        <tr style="height:8pt">
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license3Num ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license3State ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license3Iss ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $license3Exp ); ?>&nbsp;</span></p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $nothing ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-left:1px solid black;" cellspacing="0">
                        <tr style="height:21pt">
                            <td width="20%" class="table-grid top">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">List All Current Endorsements:</p>
                            </td>
                            <td class="table-grid top inner">
                                <p><span><?php echo esc_html( $endorsements ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-left:1px solid black;border-right:1px solid black;border-top:1px solid black;" cellspacing="0">
                        <tr style="height:21pt">
                            <td width="100%">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">Indicate any awards you have received for safe driving and from whom:</p>
                            </td>
                        </tr>
                        <tr style="height:21pt">
                            <td>
                                <p><span><?php echo esc_html( $awards ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-left:1px solid black;border-right:1px solid black;border-top:1px solid black;" cellspacing="0">
                        <tr style="height:21pt">
                            <td width="54%">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">Do you have a Virginia DCJS license for towing?</p>
                            </td>
                            <td class="entry">
                                <p><span><?php echo esc_html( $dcjs ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-left:1px solid black;border-right:1px solid black;" cellspacing="0">
                        <tr style="height:21pt">
                            <td width="49%">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">Have you ever been denied a DCJS license?</p>
                            </td>
                            <td class="entry">
                                <p><span><?php echo esc_html( $dcjsDenied ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-left:1px solid black;border-right:1px solid black;" cellspacing="0">
                        <tr style="height:21pt">
                            <td width="13%">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">If so, why?</p>
                            </td>
                            <td class="entry">
                                <p><span><?php echo esc_html( $dcjsDeniedReason ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                    <table style="border-left:1px solid black;border-right:1px solid black;" cellspacing="0">
                        <tr style="height:21pt">
                            <td width="48%">
                                <p style="padding-top: 5pt;padding-left: 9pt;text-indent: 0pt;text-align: left;">Have you ever been convicted of a felony?</p>
                            </td>
                            <td class="entry">
                                <p><span><?php echo esc_html( $felony ); ?>&nbsp;</span></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="40%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                        Have you ever had either your personal or Commercial Driver's License,<br />
                        permit or privileges denied, revoked or suspended?
                    </p>
                </td>
                <td width="60%">
                    <span><?php echo esc_html( $suspended ); ?>&nbsp;</span>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:8pt">
                <td width="10%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Denied</p>
                </td>
                <td width="10%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Revoked</p>
                </td>
                <td width="10%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Suspended</p>
                </td>
                <td width="20%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Type of License</p>
                </td>
                <td width="10%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Date</p>
                </td>
                <td width="10%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">State</p>
                </td>
                <td width="10%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">For How Long</p>
                </td>
                <td width="19.9%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Reason</p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1Denied ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1Revoked ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1Suspended ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1Type ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1Date ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1HowLong ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic1Reason ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2Denied ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2Revoked ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2Suspended ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2Type ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2Date ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2HowLong ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic2Reason ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3Denied ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3Revoked ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3Suspended ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3Type ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3Date ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3HowLong ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic3Reason ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4Denied ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4Revoked ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4Suspended ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4Type ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4Date ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4HowLong ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $lic4Reason ); ?>&nbsp;</span></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="60%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                        Have you been convicted or forfeited bond or collateral for violation of Motor Vehicle Laws or Ordinances<br />
                        (other than parking) During the past four (4) years prior to the date of this application.
                    </p>
                </td>
                <td width="10%" class="entry">
                    <span><?php echo esc_html( $crimConv ); ?>&nbsp;</span>
                </td>
                <td width="30%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                        If Yes, complete below.
                    </p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:8pt">
                <td width="10%" >
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Date</p>
                </td>
                <td width="50%" >
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Nature of Violation</p>
                </td>
                <td width="10%" >
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">State</p>
                </td>
                <td width="20%" >
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Penalty</p>
                </td>
                <td width="10%" >
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Points</p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation1Dt ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation1Nature ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation1State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation1Penalty ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation1Points ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation2Dt ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation2Nature ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation2State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation2Penalty ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation2Points ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation3Dt ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation3Nature ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation3State ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation3Penalty ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $violation3Points ); ?>&nbsp;</span></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="20%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                    Have you ever had any Commercial<br />
                    Motor Vehicle Accidents
                    </p>
                </td>
                <td width="10%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">
                        <input type="checkbox" <?php if ( $accident1Dt != "" ) { echo "checked=checked"; } ?>/>&nbsp;YES<br />
                        <input type="checkbox" <?php if ( $accident1Dt == "" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>  
                </td>
                <td width="49.9%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                    List below all accidents you have had while operating any type<br />
                    of motor vehicle during the past five (5) years:
                    </p>
                </td>
                <td width="10%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Where</p>
                </td>
                <td width="10%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Type</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:8pt">
                <td width="10%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Date</p>
                </td>
                <td width="30%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Nature of Accident</p>
                </td>
                <td width="10%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">No. of Deaths</p>
                </td>
                <td width="10%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">No. of Injuries</p>
                </td>
                <td width="19.9%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><br /></p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Vehicle Type</p>
                </td>
                <td width="5%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">on road</p>
                </td>
                <td width="5%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">off road</p>
                </td>
                <td width="5%" class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">prevent<br />able</p>
                </td>
                <td width="5%" class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">non-<br />prevent</p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Dt ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Nature ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Fatality ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Injury ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Spill ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1OnRoad ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1OffRoad ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Preventable ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident1Preventable ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Dt ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Nature ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Fatality ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Injury ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Spill ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2OnRoad ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2OffRoad ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Preventable ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident2Preventable ); ?>&nbsp;</span></p>
                </td>
            </tr>
            <tr style="height:8pt">
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Dt ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Nature ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Fatality ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top inner">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Injury ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Spill ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3OnRoad ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3OffRoad ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Preventable ); ?>&nbsp;</span></p>
                </td>
                <td class="table-grid top">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;"><span><?php echo esc_html( $accident3Preventable ); ?>&nbsp;</span>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                        Have you ever refused OT be tested or tested positive on an alcohol or controlled substances test based on DOT Federal Motor Carrier Safety<br />
                        Regulations in the past 2 years?
                        <input type="checkbox" <?php if ( $alcohol == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES
                        <input type="checkbox" <?php if ( $alcohol == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
            </tr>
            <tr style="height:4pt">
                <td width="100%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                        If yes, can you provide Documentation from the substance abuse professional certifying that you have successful completed the prescribed<br />
                        treatment and have been recommended to a DOT regulated safety sensitive position as specified in the Federal Motor Carrier Safety<br />
                        Regulations?
                        <input type="checkbox" <?php if ( $alcoholDoc == "Yes" ) { echo "checked=checked"; } ?>/>&nbsp;YES
                        <input type="checkbox" <?php if ( $alcoholDoc == "No" ) { echo "checked=checked"; } ?>/>&nbsp;NO
                    </p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:114pt">
                <td width="25%">
                    <h4>MEDICAL EXAMINER NATIONAL REGISTRY CONFIRMATION</h4>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: left;">
                        For each Medical Examiner's Certificate issued to a
                        commercial motor vehicle driver, we must verify that
                        the medical examiner who signed the driver's medical
                        card is listed on the National Registry. This requirement
                        is prescribed in 391.23 and 391.5
                    </p>
                    <table cellspacing="0">
                        <tr style="height:14pt">
                            <td width="30%">
                                <p><i>Verified By:</i></p>
                            </td>
                            <td width="30%" class="entry">
                                <span><?php echo esc_html( $nothing ); ?>&nbsp;</span>
                            </td>
                            <td width="10%">
                                <p><i>Date:</i></p>
                            </td>
                            <td width="30%" class="entry">
                                <span><?php echo esc_html( $nothing ); ?>&nbsp;</span>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="25%">
                    <table cellspacing="0">
                        <tr style="height:14pt">
                            <td width="50%">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Do you have a DOT medical card?</p>
                            </td>
                            <td width="50%" class="entry">
                                <span><?php echo esc_html( $medicalCard ); ?>&nbsp;</span>
                            </td>
                        </tr>
                        <tr style="height:14pt">
                            <td width="50%">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Any Restrictions?</p>
                            </td>
                            <td width="50%" class="entry">
                                <span><?php echo esc_html( $medicalCard ); ?>&nbsp;</span>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="5%">
                </td>
                <td width="45%">
                    <table cellspacing="0">
                        <tr style="height:14pt">
                            <td width="50%">
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">National Registry Number</p>
                            </td>
                            <td width="50%" class="entry">
                                <span><?php echo esc_html( $medicalNumber ); ?>&nbsp;</span>
                            </td>
                        </tr>
                        <tr style="height:14pt">
                            <td>
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">NRCME Certification Date</p>
                            </td>
                            <td class="entry">
                                <span><?php echo esc_html( $medicalDate ); ?>&nbsp;</span>
                            </td>
                        </tr>
                        <tr style="height:14pt">
                            <td>
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Expiration Date of Medical Certificate</p>
                            </td>
                            <td class="entry">
                                <span><?php echo esc_html( $medicalExpiration ); ?>&nbsp;</span>
                            </td>
                        </tr>
                        <tr style="height:14pt">
                            <td>
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Doctor's Name</p>
                            </td>
                            <td class="entry">
                                <span><?php echo esc_html( $doctorName ); ?>&nbsp;</span>
                            </td>
                        </tr>
                        <tr style="height:14pt">
                            <td >
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Doctor's Address</p>
                            </td>
                            <td class="entry">
                                <span><?php echo esc_html( $doctorAddress ); ?>&nbsp;</span>
                            </td>
                        </tr>
                        <tr style="height:14pt">
                            <td >
                                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">Doctor's Phone</p>
                            </td>
                            <td class="entry">
                                <span><?php echo esc_html( $doctorPhone ); ?>&nbsp;</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:114pt">
                <td width="100%">
                <p style="padding-left: 8pt;text-indent: 0pt;line-height: 6pt;text-align: center;">
                    Pursuant to the Provisions of paragraph (b) (10) of Section 391.21 of the Federal Motor Carrier Safety Regulations you
                    are hereby Notified that if you are to be considered for employment by WRECKER SERVICE INC. The 
                    information which you have provided in Accordance with this paragraph may be used, and your prior employers may be 
                    contacted for the purpose of investigating your background as required by Section 391.23.
                    </p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="20%">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                        <b><i>Driver Applicant Signature</i></b>
                    </p>
                </td>
                <td width="40%" class="entry">
                    <span><?php if ( $positionApply == "Tow truck driver" || $positionApply == "Line Haul / Sleeper Driver" || $positionApply == "Combination Driver/Yard Worker" ) { echo esc_html( $signature ); } ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                        Date
                    </p>
                </td>
                <td width="34.9%" class="entry">
                    <span><?php if ( $positionApply == "Tow truck driver" || $positionApply == "Line Haul / Sleeper Driver" || $positionApply == "Combination Driver/Yard Worker" ) { echo esc_html( $signDate ); } ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <br />
    </div>
    <!-- PAGE -->
    <pagebreak/>
    <div class="section-box">
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:17pt">
                <td width="25%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                </td>
                <td width="50%" style="border-left:1px solid black;border-right:1px solid black;padding-left: 25pt;">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;">NAME: FIRST-MIDDLE-LAST AS IT APPEARS ON YOUR SOCIAL SECURITY CARD</p>
                </td>
                <td width="25%">
                    <p style="padding-left: 12pt;text-indent: 0pt;line-height: 8pt;text-align: left;"></p>
                </td>
            </tr>
            <tr style="height:17pt;">
                <td>
                    <span></span> 
                </td>
                <td style="border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;padding-left: 25pt;">
                    <span style="text-indent: 0pt;line-height: 8pt;text-align: left;"><?php echo esc_html( $fullName ); ?>&nbsp;</span> 
                </td>
                <td>
                    <span></span> 
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:40pt">
                <td style="width:541pt;">
                    <p style="padding-left: 6pt;text-indent: 0pt;text-align: left;"><br /></p>
                    <p style="padding-left: 6pt;text-indent: 0pt;text-align: left;">This Application will remain active for a period of three (3) months from the date of application.</p>
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:328pt">
                <td width="100%" style="font-size:9px; padding-left: 5px;">
                    <h3>All applicants must read and sign below:</h3>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="100%" style="font-size:9px; padding-left: 5px;">
                    <span style="font-size:9px;">It is agreed and understood that:</span>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="90%" style="margin-left:50px; margin-bottom:20px; font-size:9px; padding-left: 20px;">
                    <p>1 Completing this application will in no way assure that I will be employed.</p>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="90%" style="margin-left:50px; margin-bottom:20px; font-size:9px; padding-left: 20px;">
                    <p>2 This application was completed by me; all entries on it and information in it are true and
                        complete to the best of my knowledge and any misrepresentations of information given shall be
                        considered an act of dishonesty subjecting me to disqualification or discharge. I will furnish
                        freely such information or documents that may be required to complete my employment file.
                    </p>    
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="90%" style="margin-left:50px; margin-bottom:20px; font-size:9px; padding-left: 20px;">
                    <p>3 In consideration of my being considered for employment and or being employed I hereby agree to
                        submit to physical examination and tests as may be required by the Company, and I do hereby (1)
                        grant release and assign unto Wrecker Service Inc. all rights, title and interest that I
                        may subsequently acquire in all records and reports arising out of or in connection with said
                        examinations and tests and (2) waive all rights to be advised on the content of said records and
                        reports or to receive copies thereof, without prior written consent of Wrecker Service Inc.
                    </p>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="90%" style="margin-left:50px; margin-bottom:20px; font-size:9px; padding-left: 20px;">
                    <p>4 If employed, I agree (1) to conform to the rules and regulations of Wrecker Service Inc. and
                        (2) that my employment relationship with Wrecker Service Inc is voluntarily and I acknowledge that there is no
                        specified length of employment. Accordingly, either I or the company can terminate the
                        relationship at will, for any reason, with or without cause, at any time. I further
                        understand and agree that consistent with this policy of at-will employment, the Company can discipline, demote or suspend me or decrease
                        my pay as it sees fit, at its sole and absolute discretion, with or without advance warning.
                        I understand that the terms and conditions herein and set forth in the Employee Handbook may
                        only be modified from time to time by written notice from the Company or it’s Agents.
                    </p>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="90%" style="margin-left:50px; margin-bottom:20px; font-size:9px; padding-left: 20px;">
                    <p>5 If employed, I do hereby grant Wrecker Service Inc. a nonexclusive right to
                        practice any invention or device which I may conceive, develop or perfect using Company
                        resources (such as time/or materials) during the period of my employment and to duplicate
                        the invention or device as often as it may find occasion to do so in its business.
                    </p>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="90%" style="font-size:9px; padding-left: 5px;">
                    <p>
                        I hereby authorize Wrecker Service Inc., or its agents (1) to investigate my previous
                        record of employment to ascertain any and all information which may concern my record whether same
                        is of record or not and I release my former employer from all liability for any damage on account of
                        furnishing such information; (2) to investigate my previous scholastic record, and pursuant to the
                        Family Educational Rights and Privacy Act of 1974, I authorize release of my education records by
                        any educational agency or institution which I have attended; (3) to secure an investigative consumer
                        report pursuant to Section 606 of the Fair Credit Reporting Act, including information as to my
                        character, general reputation, personal characteristics and mode of living, whichever are
                        applicable, provided that I may receive the name and address of the investigating consumer reporting
                        agency from whom I may make a written request to receive full disclosure of any such investigative
                        consumer report to receive same; and (4) to investigate my background and obtain such other
                        information lawfully available to Wrecker Service Inc. as it deems appropriate and I
                        release the supplier of such information from all liability for any damage that may result from
                        releasing such information.
                    </p>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:328pt">
                <td width="8%">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                        <span style=" background-color: #FEEC99;"> Signature</span><span class="s43"> </span>
                    </p>
                </td>
                <td width="40%" class="entry">
                    <span><?php echo esc_html( $signature ); ?>&nbsp;</span> 
                </td>
                <td width="5%">
                    <p style="padding-left: 7pt;text-indent: 0pt;line-height: 11pt;text-align: left;">
                        <span style=" background-color: #FEEC99;"> Date</span><span class="s43">:</span>
                    </p>
                </td>
                <td width="39%" class="entry">
                    <span><?php echo esc_html( $signDate ); ?>&nbsp;</span> 
                </td>
            </tr>
        </table>
        <br />
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;text-align: center;" cellspacing="0">
            <tr style="height:116pt">
                <td width="100%">
                    <h3 class="section-header" style="padding-left: 31pt;padding-right: 16pt;text-indent: 0pt;text-align: center;">
                        Wrecker Service, Inc. Equal Employment Opportunity Policy
                    </h3>
                </td>
            </tr>
        </table>
        <br />
        <table cellspacing="0">
            <tr style="height:116pt">
                <td width="100%">
                    <p style="font-size:9px;">
                        It is Wrecker Service Inc policy to select the best-qualified person for each position
                        in the company. The Company will not discriminate against any applicant because of race, creed,
                        color, religion, sex, age, national origin, handicap, marital status or veteran status. This policy
                        applies to all employment practices and personnel actions.
                    </p>
                    <br />
                    <p style="font-size:9px;">
                        Recognizing the value of using human resources to their fullest, the Company has developed and
                        instituted policies and procedures to ensure that it will (a) Recruit, hire, train and promote
                        persons, in all job classifications without regard to age, race, color, religion, national origin,
                        sex or physical or mental handicap, (b) Base decisions on employment to further the principal of
                        equal employment opportunity ( c) Base promotion decisions on principles of equal opportunity by
                        imposing only valid requirements for promotional opportunities. (d) Administer all personnel actions such as
                        compensation, benefits, transfers, layoffs, returns from layoffs, terminations, and Company
                        sponsored programs without regard to age, race, color, religion, national origin, sex or physical or
                        mental handicap. (e) Maintain a nondiscriminatory job environment free of sexually harassing
                        conduct.
                    </p>
                    <br />
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;text-align: center;" cellspacing="0">
            <tr style="height:19pt;">
                <td width="100%">
                    <h3 style="padding-top: 5pt;padding-left: 14pt;padding-right: 31pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                        Applicant - Do Not Write Below This Line
                    </h3>
                </td>
            </tr>
        </table>
        <table style="border-top:2px solid black;" cellspacing="0">
            <tr style="height:4pt">
                <td width="100%">
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:17pt">
                <td width="100%">
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Approvals (For RRWS use only)</p>
                    <p style="padding-left: 8pt;text-indent: 0pt;line-height: 8pt;text-align: left;"><br /></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr width="100%" style="height:9pt">
                <td style="width:46pt;" class="table-grid inner">
                    <p class="s45" style="text-indent: 0pt;line-height: 7pt;text-align: center;">Title</p>
                </td>
                <td style="width:70pt;" class="table-grid inner">
                    <p class="s45" style="padding-left: 5pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Signature
                    </p>
                </td>
                <td style="width:54pt;" class="table-grid inner">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Date</p>
                </td>
                <td style="width:30pt;" class="table-grid inner">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Title</p>
                </td>
                <td style="width:96pt;" class="table-grid inner">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Signature
                    </p>
                </td>
                <td style="width:48pt;" class="table-grid inner">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Date</p>
                </td>
                <td style="width:50pt;" class="table-grid inner">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Title</p>
                </td>
                <td style="width:94pt;" class="table- inner">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Signature
                    </p>
                </td>
                <td style="width:46pt;" class="table-grid">
                    <p class="s45" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Date</p>
                </td>
            </tr>
            <tr style="height:17pt">
                <td style="width:46pt;" class="table-grid top inner">
                    <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Hiring</p>
                    <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Manager</p>
                </td>
                <td style="width:70pt;" class="table-grid top inner">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:54pt;" class="table-grid top inner">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:30pt;" class="table-grid top inner">
                    <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 8pt;text-align: left;">General</p>
                    <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">Manager</p>
                </td>
                <td style="width:96pt;" class="table-grid top inner">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:48pt;" class="table-grid top inner">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:50pt;" class="table-grid top inner">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    <p class="s2" style="padding-left: 1pt;text-indent: 0pt;line-height: 7pt;text-align: left;">President
                    </p>
                </td>
                <td style="width:94pt;" class="table-grid top inner">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
                <td style="width:46pt;" class="table-grid top">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                </td>
            </tr>
        </table>
        <table style="border-top:1px solid black;" cellspacing="0">
            <tr style="height:74pt">
                <td width="100%">
                    <p style="text-indent: 0pt;text-align: left;"><br /></p>
                    <p style="padding-left: 8pt;padding-right: 81pt;text-indent: 0pt;line-height: 106%;text-align: left;">
                        This application is active for three (3) months and may be extended for one additional three-month<br />
                        period. The extension is to complete processing if rrws, Inc. is unable to complete all elements of<br />
                        the hiring process within three (3) months. If extended, by your signature you authorize this<br />
                        application through enter date
                    </p>
                </td>
            </tr>
        </table>
        <table cellspacing="0">
            <tr style="height:74pt">
                <td width="20%">
                </td>
                <td width="20%" class="entry">
                    <p><?php echo esc_html( $nothing ); ?>&nbsp;</p> 
                </td>
                <td width="10%">
                </td>
                <td width="5%">
                    <p style="padding-left: 251pt;text-indent: 0pt;line-height: 11pt;text-align: left;"><i>Signed</i></p>
                    <br />
                </td>
                <td width="20%" class="entry">
                    <p><?php echo esc_html( $nothing ); ?>&nbsp;</p> 
                </td>
                <td width="10%" class="entry">
                </td>
                <td width="15%">
                </td>
            </tr>
            <tr style="height:74pt">
                <td width="20%">
                </td>
                <td width="20%">
                </td>
                <td width="10%">
                </td>
                <td width="5%">
                    <p style="padding-left: 250pt;text-indent: 0pt;text-align: left;"><i>Title</i></p>
                    <br />
                </td>
                <td width="20%" class="entry">
                    <p><?php echo esc_html( $nothing ); ?>&nbsp;</p> 
                </td>
                <td width="10%" class="entry">
                </td>
                <td width="15%">
                </td>
            </tr>
        </table>
        <br />
    </div>
</body>
</html>