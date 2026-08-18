<style>
    /* Container slider */
    .diklat-slider {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 12px;
    }

    /* Container gambar */
    .diklat-slider .carousel-item {
        height: 450px;
        background-color: #f5f5f5;
    }

    /* Gambar */
    .diklat-slider .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    /* Responsive untuk tablet */
    @media (max-width: 768px) {
        .diklat-slider .carousel-item {
            height: 350px;
        }
    }

    /* Responsive untuk HP */
    @media (max-width: 576px) {
        .diklat-slider .carousel-item {
            height: 250px;
        }
    }
</style>
