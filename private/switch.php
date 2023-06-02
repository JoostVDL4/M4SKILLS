function getMonth($inputValue) {
    $monthNum = null;
    $monthName = null;

    if (is_numeric($inputValue)) {
        $monthNum = intval($inputValue);
    } else {
        $inputValue = strtolower($inputValue);
        switch ($inputValue) {
            case 'jan':
                $monthNum = 1;
                break;
            case 'feb':
                $monthNum = 2;
                break;
            case 'mar':
                $monthNum = 3;
                break;
            case 'apr':
                $monthNum = 4;
                break;
            case 'may':
                $monthNum = 5;
                break;
            case 'jun':
                $monthNum = 6;
                break;
            case 'jul':
                $monthNum = 7;
                break;
            case 'aug':
                $monthNum = 8;
                break;
            case 'sep':
                $monthNum = 9;
                break;
            case 'oct':
                $monthNum = 10;
                break;
            case 'nov':
                $monthNum = 11;
                break;
            case 'dec':
                $monthNum = 12;
                break;
            default:
                return "Ongeldige invoer!";
        }
    }

    switch ($monthNum) {
        case 1:
            $monthName = 'Januari';
            break;
        case 2:
            $monthName = 'Februari';
            break;
        case 3:
            $monthName = 'Maart';
            break;
        case 4:
            $monthName = 'April';
            break;
        case 5:
            $monthName = 'Mei';
            break;
        case 6:
            $monthName = 'Juni';
            break;
        case 7:
            $monthName = 'Juli';
            break;
        case 8:
            $monthName = 'Augustus';
            break;
        case 9:
            $monthName = 'September';
            break;
        case 10:
            $monthName = 'Oktober';
            break;
        case 11:
            $monthName = 'November';
            break;
        case 12:
            $monthName = 'December';
            break;
        default:
            return "Ongeldige invoer!";
    }

    return $monthName;
}

// Voorbeeldgebruik:
$input = 'mar';
$result = getMonth($input);
echo $result;  // Output: Maart

$input = '9';
$result = getMonth($input);
echo $result;  // Output: September
