<?php

enum PostingType: string
{

    /**
     * Проверка статуса готовности сервиса при первичном подключении и периодически после подключения
     * */
    case TYPE_PING = 'TYPE_PING';

    /**
     * Новое отправление
     * */
    case TYPE_NEW_POSTING = 'TYPE_NEW_POSTING';

    /**
     * Отмена отправления
     * */
    case TYPE_POSTING_CANCELLED = 'TYPE_POSTING_CANCELLED';

    /**
     * Изменение статуса отправления
     * */
    case TYPE_STATE_CHANGED = 'TYPE_STATE_CHANGED';

    /**
     * Изменение даты отгрузки отправления
     * */
    case TYPE_CUTOFF_DATE_CHANGED = 'TYPE_CUTOFF_DATE_CHANGED';

    /**
     * Изменение даты доставки отправления
     * */
    case TYPE_DELIVERY_DATE_CHANGED = 'TYPE_DELIVERY_DATE_CHANGED';

    /**
     * Создание и обновление товара или ошибка в процессе
     * */
    case TYPE_CREATE_OR_UPDATE_ITEM = 'TYPE_CREATE_OR_UPDATE_ITEM';

    /** @deprecated */
    case TYPE_CREATE_ITEM = 'TYPE_CREATE_ITEM';

    /** @deprecated */
    case TYPE_UPDATE_ITEM = 'TYPE_UPDATE_ITEM';

    /**
     * Изменение ценового индекса товара
     * */
    case TYPE_PRICE_INDEX_CHANGED = 'TYPE_PRICE_INDEX_CHANGED';

    /**
     * Изменение остатков на складах продавца
     * */
    case TYPE_STOCKS_CHANGED = 'TYPE_STOCKS_CHANGED';

    /**
     * Новое сообщение в чате
     * */
    case TYPE_NEW_MESSAGE = 'TYPE_NEW_MESSAGE';

    /**
     * Изменение сообщения в чате
     * */
    case TYPE_UPDATE_MESSAGE = 'TYPE_UPDATE_MESSAGE';

    /**
     * Ваше сообщение прочитано покупателем или поддержкой
     * */
    case TYPE_MESSAGE_READ = 'TYPE_MESSAGE_READ';

    /**
     * Чат закрыт
     * */
    case TYPE_CHAT_CLOSED = 'TYPE_CHAT_CLOSED';
}
