                <!-- footer.php -->
                </div>
            </div>
        </div>
    </div> <!-- Close content-wrapper -->

    <footer class="footer bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Nish. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            
        <?php
        
        if (isset($_SESSION['_flash'])) { ?>
    <script> 
        Swal.fire({
        title: '<?=$_SESSION['_flash']['msg']?>',
        icon: '<?=$_SESSION['_flash']['type']?>',//same function as 'title'
        draggable: true,
        timer : 2000,
        });

    <?php
    unset($_SESSION['_flash']);
    } ?>
    </script>
</body>

</html>