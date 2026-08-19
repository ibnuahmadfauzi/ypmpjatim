<style>
    .artikel-populer-item {
        display: flex;
        gap: 12px;
        text-decoration: none;
        color: inherit;
        padding: 12px 0;
        border-bottom: 1px solid #eeeeee;
    }

    .artikel-populer-item:first-child {
        padding-top: 0;
    }

    .artikel-populer-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    /* Thumbnail persegi */
    .artikel-populer-item img {
        width: 90px;
        height: 90px;
        min-width: 90px;
        object-fit: cover;
        object-position: center;
        border-radius: 8px;
    }

    /* Informasi artikel */
    .artikel-populer-info {
        min-width: 0;
    }

    .artikel-populer-info h6 {
        font-size: 18px;
        line-height: 1.4;
        margin: 0 0 6px;
        font-weight: 600;

        /* Maksimal 2 baris */
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .artikel-populer-info small {
        font-size: 12px;
        color: #888;
    }

    /* Efek ketika diarahkan mouse */
    .artikel-populer-item:hover h6 {
        color: #0d6efd;
    }
</style>
