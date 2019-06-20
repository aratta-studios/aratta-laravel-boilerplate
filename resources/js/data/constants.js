export const accountingTypes = [
    'همه',
    'شرکت',
    'رانندگان',
    'مشتری ها',
    'سفر ها'
];

export const accountingDebtorCreditorTypes = [
    'همه',
    'بدهکار',
    'بستانکار'
];

export const accountingTableHeaders = [
    {
        sortable: false,
        text: 'شناسه',
        value: 'tracking_code',
        align: 'center'
    }, {
        sortable: false,
        text: 'توضیحات',
        value: 'code',
        align: 'center'
    },
    {
        sortable: false,
        text: 'مبلغ',
        value: 'value',
        align: 'center'
    },
    {
        sortable: false,
        text: 'وضعیت',
        value: 'status',
        align: 'center'
    },
    {
        sortable: false,
        text: 'نوع',
        value: 'holder',
        align: 'center'
    },
    {
        sortable: false,
        text: 'تاریخ و ساعت',
        value: 'created_at',
        align: 'center'
    }
];
export const status = [
    'در جست و جوی راننده',
    'درخواست رزرو شده',
    'رد درخواست توسط مشتری قبل از قبول راننده',
    'رد درخواست توسط راننده',
    'رد درخواست توسط مشتری بعد از قبول راننده',
    'بارگیری انجام شده',
    'پایان سفر',
    'تایید مسافر'
]
export const tripsTableHeaders = [
    {
        sortable: false,
        text: 'شناسه',
        value: 'tracking_code',
        align: 'center'
    },
    {
        sortable: false,
        text: 'آدرس مبدا',
        value: 'start_address',
        align: 'center'
    },
    {
        sortable: false,
        text:  'آدرس مقصد',
        value: 'end_address',
        align: 'center'
    },
    {
        sortable: false,
        text:   'مشتری',
        value: 'customer.full_name',
        align: 'center'
    },
    {
        sortable: false,
        text:    'راننده',
        value: 'driver.full_name',
        align: 'center'
    },
    {
        sortable: false,
        text:    'خودرو',
        value: 'car_id',
        align: 'center'
    },

    {
        sortable: false,
        text:   'مبلغ',
        value: 'price',
        align: 'center'
    },

    {
        sortable: false,
        text:    'وضعیت',
        value: 'status',
        align: 'center'
    },
    {
        sortable: false,
        text:   'تاریخ',
        value: 'created_at',
        align: 'center'
    },
];
