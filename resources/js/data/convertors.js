import Moment from "moment-jalaali";

export function convertToDescription(code) {
    switch (code) {
        case '101':
            return 'شارژ آنلاین مشتری';
        case '201':
            return 'شارژ آنلاین راننده';
        case '102':
            return 'پرداخت آنلاین مشتری';
        case '200':
            return 'سهم راننده از سفر آنلاین';
        case '406':
            return 'دریافت هزینه آنلاین از مشتری';
        case '407':
            return 'پرداخت سهم راننده از سفر آنلاین';
        case '408':
            return 'دریافت پورسانت شرکت از پرداخت نقدی';
        case '203':
            return 'پرداخت پورسانت شرکت از پرداخت نقدی';
    }
}

export function convertToHolder(code) {
    switch (code) {
        case '101':
            return 'مشتری';
        case '201':
            return 'راننده';
        case '102':
            return 'مشتری';
        case '200':
            return 'راننده';
        case '406':
            return 'شرکت';
        case '407':
            return 'شرکت';
        case '408':
            return 'شرکت';
        case '203':
            return 'راننده';
    }
}

export function convertToStatus(code) {
    switch (code) {
        case '101':
            return 'افزایش';
        case '201':
            return 'افزایش';
        case '102':
            return 'کاهش';
        case '200':
            return 'افزایش';
        case '406':
            return 'افزایش';
        case '407':
            return 'کاهش';
        case '408':
            return 'افزایش';
        case '203':
            return 'کاهش';
    }
}

export function convertDateToJalali(date) {
    return Moment(date, 'YYYY-M-D').format('jYYYY/jM/jD');
}

export function convertDateTimeToGregorian(date) {
    return Moment(date, 'jYYYY/jM/jD HH:mm:ss').format('YYYY-M-D HH:mm:ss');
}

export function convertDateTimeToJalali(date) {
    return Moment(date, 'YYYY-M-D hh:mm:ss').format('hh:mm:ss jYYYY/jM/jD')
}


export function accountingTypeField(data) {
    switch (data) {
        case 'شرکت':
            return 'company';
        case 'رانندگان':
            return 'drivers';
        case 'مشتری ها':
            return 'customers';
        case 'سفر ها':
            return 'trips';
        case 'همه':
            return  null;
    }
}
export function statusTripField(data) {
    switch (data) {
        case 'شرکت':
            return 'company';
        case 'رانندگان':
            return 'drivers';
        case 'مشتری ها':
            return 'customers';
        case 'سفر ها':
            return 'trips';
        case 'همه':
            return  null;
    }
}

export function accountingCreditorDebtorField(data) {
    switch (data) {
        case 'بدهکار':
            return 'debtor';
        case 'بستانکار':
            return 'creditor';
        case 'همه':
            return 'all';
    }
}

export function accountingTableData(input) {
    let data = input;
    for (let i = 0; i < data.length; i++) {
        data[i].holder = convertToHolder(data[i].code);
        data[i].status = convertToStatus(data[i].code);
        data[i].code = convertToDescription(data[i].code);
        data[i].value = Math.abs(data[i].value);
        data[i].created_at = convertDateTimeToJalali(data[i].created_at);
    }

    return data;
}

export function tripTableData(input) {
    let data = input;
    for (let i = 0; i < data.length; i++) {
        data[i].created_at = convertDateTimeToJalali(data[i].created_at);
    }

    return data;
}
