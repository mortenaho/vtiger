<?php
/*+***********************************************************************************
 * محتوای این فایل تحت مجوز عمومی vtiger CRM نسخه 1.0
 * ("مجوز") قرار دارد؛ شما نمی‌توانید از این فایل جز در تطابق با مجوز استفاده کنید
 * کد اصلی: vtiger CRM Open Source
 * توسعه‌دهنده اولیه کد اصلی vtiger است.
 * بخش‌هایی که توسط vtiger ایجاد شده‌اند، دارای حق نشر (C) vtiger هستند.
 * تمام حقوق محفوظ است.
 *************************************************************************************/
$languageStrings = array(
    // رشته‌های پایه
    'HelpDesk' => 'تیکت‌ها',
    'SINGLE_HelpDesk' => 'تیکت',
    'LBL_ADD_RECORD' => 'افزودن تیکت',
    'LBL_RECORDS_LIST' => 'فهرست تیکت‌ها',

    // بلوک‌ها
    'LBL_TICKET_INFORMATION' => 'اطلاعات تیکت',
    'LBL_TICKET_RESOLUTION' => 'راه‌حل تیکت',

    // برچسب‌های فیلد
    'Ticket No' => 'شماره تیکت',
    'Severity' => 'شدت',
    'Update History' => 'تاریخچه به‌روزرسانی',
    'Hours' => 'ساعت‌ها',
    'Days' => 'روزها',
    'Title' => 'عنوان',
    'Solution' => 'راه‌حل',
    'From Portal' => 'از پورتال',
    'Related To' => 'نام سازمان',
    'Contact Name' => 'نام تماس',

    // افزودنی‌ها برای ورودی‌های موجود در لیست انتخابی
    'Big Problem' => 'مشکل بزرگ',
    'Small Problem' => 'مشکل کوچک',
    'Other Problem' => 'مشکل دیگر',

    'Normal' => 'عادی',
    'High' => 'بالا',
    'Urgent' => 'فوری',

    'Minor' => 'جزئی',
    'Major' => 'اصلی',
    'Feature' => 'ویژگی',
    'Critical' => 'بحرانی',

    'Open' => 'باز',
    'Wait For Response' => 'منتظر پاسخ',
    'Closed' => 'بسته شده',
    'LBL_STATUS' => 'وضعیت',
    'LBL_SEVERITY' => 'شدت',

    // عملیات DetailView
    'LBL_CONVERT_FAQ' => 'تبدیل به FAQ',
    'LBL_RELATED_TO' => 'مرتبط با',

    // اضافه شده برای پشتیبانی از i18n در ایمیل‌های تیکت
    'Ticket ID' => 'شناسه تیکت',
    'Hi' => 'سلام',
    'Dear' => 'عزیز',
    'LBL_PORTAL_BODY_MAILINFO' => 'تیکت',
    'LBL_DETAIL' => 'جزئیات به شرح زیر است:',
    'LBL_REGARDS' => 'با احترام',
    'LBL_TEAM' => 'تیم HelpDesk',
    'LBL_TICKET_DETAILS' => 'جزئیات تیکت',
    'LBL_SUBJECT' => 'موضوع: ',
    'created' => 'ایجاد شده',
    'replied' => 'پاسخ داده شده',
    'reply' => 'پاسخی به',
    'customer_portal' => 'در "پورتال مشتری" در VTiger.',
    'link' => 'شما می‌توانید از لینک زیر برای مشاهده پاسخ‌های داده شده استفاده کنید:',
    'Thanks' => 'متشکرم',
    'Support_team' => 'تیم پشتیبانی Vtiger',
    'The comments are' => 'توضیحات به شرح زیر است',
    'Ticket Title' => 'عنوان تیکت',
    'Re' => 'پاسخ:',

    // این برچسب برای پورتال مشتری است
    'LBL_STATUS_CLOSED' => 'بسته شده', // این برچسب را تغییر ندهید. برای بررسی وضعیت استفاده می‌شود. اگر وضعیت "بسته شده" در سمت سرور vtigerCRM تغییر کند، باید در فایل زبان پورتال مشتری نیز تغییر دهید.
    'LBL_STATUS_UPDATE' => 'وضعیت تیکت به‌روزرسانی شده به',
    'LBL_COULDNOT_CLOSED' => 'تیکت نتوانست به',
    'LBL_CUSTOMER_COMMENTS' => 'مشتری اطلاعات اضافی زیر را به پاسخ شما ارائه داده است:',
    'LBL_RESPOND' => 'لطفاً به تیکت فوق در اسرع وقت پاسخ دهید.',
    'LBL_SUPPORT_ADMIN' => 'مدیر پشتیبانی',
    'LBL_RESPONDTO_TICKETID' => 'پاسخ به شناسه تیکت',
    'LBL_RESPONSE_TO_TICKET_NUMBER' => 'پاسخ به شماره تیکت',
    'LBL_TICKET_NUMBER' => 'شماره تیکت',
    'LBL_CUSTOMER_PORTAL' => 'در پورتال مشتری - فوری',
    'LBL_LOGIN_DETAILS' => 'جزئیات ورود به پورتال مشتری شما به شرح زیر است:',
    'LBL_MAIL_COULDNOT_SENT' => 'ایمیل ارسال نشد',
    'LBL_USERNAME' => 'نام کاربری:',
    'LBL_PASSWORD' => 'رمز عبور:',
    'LBL_SUBJECT_PORTAL_LOGIN_DETAILS' => 'در مورد جزئیات ورود به پورتال مشتری شما',
    'LBL_GIVE_MAILID' => 'لطفاً ایمیل خود را ارائه دهید',
    'LBL_CHECK_MAILID' => 'لطفاً ایمیل خود را برای پورتال مشتری بررسی کنید',
    'LBL_LOGIN_REVOKED' => 'ورود شما لغو شده است. لطفاً با مدیر خود تماس بگیرید.',
    'LBL_MAIL_SENT' => 'ایمیل با جزئیات ورود به پورتال مشتری به ایمیل شما ارسال شده است',
    'LBL_ALTBODY' => 'این بدنه متن ساده برای مشتریان غیر HTML است',
    'HelpDesk ID' => 'شناسه تیکت',

    // میانبرهای پورتال
    'LBL_ADD_DOCUMENT' => "افزودن سند",
    'LBL_OPEN_TICKETS' => "تیکت‌های باز",
    'LBL_CREATE_TICKET' => "ایجاد تیکت",
);

$jsLanguageStrings = array(
    'LBL_ADD_DOCUMENT' => 'افزودن سند',
    'LBL_OPEN_TICKETS' => 'تیکت‌های باز',
    'LBL_CREATE_TICKET' => 'ایجاد تیکت',
);
