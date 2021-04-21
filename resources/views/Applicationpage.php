<?php
/* @var array $params*/
$applicants = $params;
?>

<!doctype html>
<html class="no-js" lang="da-DK">

<?php
include_once(component("head.php"));
?>

<body>
    <?php 
        include_once(component("header.php"));
    ?> 
    <main>
        <section>
            <div class="dashboard-container">
                <h1> Ansøgninger </h1>
            </div>
            <div>
                <table>
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Navn</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">CVR</th>
                        <th scope="col">Godkend Ansøgning</th>
                        <th scope="col">Afslå Ansøgning</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($applicants > 0)){
                        foreach ($applicants as $applicant){?>
                            <tr>
                                <th scope="row"><?=$applicant['id']?></th>
                                <td><?=$applicant['name']?></td>
                                <td><?=$applicant['email']?></td>
                                <td><?=$applicant['phone_number']?></td>
                                <td><?=$applicant['cvr']?></td>
                                <td>
                                    <form method="post" action="<?=url('confirm-application')?>">
                                        <button type="submit" name="applicant_id" value="<?= $applicant['id']?>">Godkend</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="<?=url('deny-application')?>">
                                        <button type="submit" name="applicant_id" value="<?= $applicant['id']?>">Afslå</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {?>
                        <th>Ingen Ansøgninger</th>
                        <?php
                    }?>
                    </tbody>
                </table>
            </div>
        </section>
        <img src="http://engrocerieswebshop.test/kp.png" style="width: 640px;"> 
    </main>
    <footer></footer>

<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/js/main.js"></script>
</body>

</html>
