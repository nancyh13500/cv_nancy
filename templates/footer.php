<section class="footer">
    <footer>
        <div class="container-fluid py-4 bg-dark text-white">
            <div class="d-flex flex-column align-items-center mt-2 mb-2">
                <p class="name-footer mb-2">Nancy HANOYAN</p>
                <p class="mail mb-2"><i class="bi bi-envelope"></i> nancy.hanoyan@free.fr</p>
                <p class="phone mb-2"><i class="bi bi-telephone"></i> 06 16 51 41 74</p>
            </div>
        </div>
    </footer>
</section>

<?php
// Calcul du chemin de base relatif
$basePath = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
$indexJsVersion = filemtime(__DIR__ . '/../assets/js/index.js');
$skillsJsVersion = filemtime(__DIR__ . '/../assets/js/skills-carousel.js');
$navJsVersion = filemtime(__DIR__ . '/../assets/js/nav.js');
?>
<script src="https://kit.fontawesome.com/25645a0adc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $basePath; ?>assets/js/index.js?v=<?php echo $indexJsVersion; ?>"></script>
<script src="<?php echo $basePath; ?>assets/js/skills-carousel.js?v=<?php echo $skillsJsVersion; ?>"></script>
<script src="<?php echo $basePath; ?>assets/js/nav.js?v=<?php echo $navJsVersion; ?>"></script>
</body>

</html>

