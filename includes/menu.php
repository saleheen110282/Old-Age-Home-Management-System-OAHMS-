                <div style="position: relative; z-index: 9999; display: inline-block; float: right; margin-right: 30px;">
                    <div id="profileMenu" style="position: absolute; right: 0; display: none; border-radius: 5px; height: 130px; width: 160px; font-size: 17px; background-color: #DDDDDD; color: #5A5454;">
                        <div style="padding: 15px; text-align: center;">
                            <?php  
                                $id = $_SESSION['userid'];
                                $sql = "SELECT name FROM myuser WHERE userid='$id'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo htmlspecialchars($row['name']);
                            ?>
                        </div>
                        <hr>
                        <div style="padding: 10px; text-align: center;"><a style="text-decoration: none; color: #5A5454;" href="myprofile.php">My Profile</a></div>
                        <hr>
                        <div style="padding: 10px; text-align: center;"><a style="text-decoration: none; color: #5A5454;" href="../includes/logout.php">Logout</a></div>
                    </div>
                </div>

                <script>
                    const img = document.getElementById("profileImg");
                    const menu = document.getElementById("profileMenu");
                    img.addEventListener("click", () => {
                        menu.style.display = (menu.style.display === "none") ? "block" : "none";
                    });
                </script>