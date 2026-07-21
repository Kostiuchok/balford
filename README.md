# Balford — balford.com.ua

Сайт компанії «Балфорд Україна» (альтернативна гідроенергетика).

- **Домен:** https://balford.com.ua/
- **Хостинг:** shared hosting
- **Стек:** WordPress (custom theme), shared MySQL/PHP

## Структура репозиторію

```
legacy-static/          Попередня статична версія сайту (HTML/CSS/JS) — залишена як референс дизайну та контенту
wp-content/
  themes/
    balford/             Кастомна WordPress-тема (у розробці)
```

## Розробка теми

Тема лежить у `wp-content/themes/balford`. Для деплою на хостинг копіюється
вміст цієї папки в `wp-content/themes/balford` на сервері.

## Сторінки / розділи

- Головна
- Про компанію
- Новини (архів + окремі записи, custom post type)
- Екологія
- Контакти

Мультимовність UA/EN — через плагін Polylang.
