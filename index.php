<?php include 'phpfiles/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>TO-DO-LIST</title>
</head>
<body>
    <h1 class="title"> YOUR <span class="lined">TO-DO</span> LIST </h1>
    <div class="flex_class">
        <div class="container">
            <div class="header">
                <a href="#day" class="day active">Day</a>
                <a href="#week" class="week">Week</a>
                <a href="#month" class="month">Month</a>
                <a href="#year" class="year">Year</a>
            </div>
            <div id="day" class="page" >
            <div class="date_day">
                    <div id="current-dayofweek"></div>
                    <div id="current-day"></div>
                    <div id="current-month"></div>
            </div>
            <div class="tasks">
        
                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
                <form class="add-task" method ="post" action="phpfiles/add_task_day.php" id="add-task">
                        <input type="text" name ="task" placeholder="Entrer the task" required class="box">
                        <input type="submit" name="submit" value="add task" class="btn">
                    </form>
                    <?php
                    $tasks = include 'phpfiles/fetch_tasks_day.php';
                    if (empty($tasks)) {
                        echo '<p>Aucun task</p>';
                    } else {
                        foreach ($tasks as $task) { ?>
                    <div class="task">
                        <div class="checkbox" id="checkbox"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16" id=".bi-check-square-fill">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                        </svg>
                        <?php echo '<h3>'.htmlspecialchars($task['description']) .'</h3>'; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16" id="menu-toggle">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                        </svg>
                        <div class="menu" id="menu">
                            <a class="done">Done</a>
                            <form method="post" action="phpfiles/delete_task.php">
                                <input type="hidden" name="task_id" value="<?php echo htmlspecialchars($task['description']); ?>">
                                <button class="delete" type=submit>Delete</button>
                            </form>
                        </div>
                    </div>
                <?php }
                    }
                    ?>   
            </div>
            </div>





            <div id="week" class="page" style="display:none;">
                <div class="date_day">
                    <div id="current-dayofweek"></div>
                    <div id="current-day"></div>
                    <div id="current-month"></div>
                </div>
                <div class="tasks">
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                    <form class="add-task" method ="post" action="phpfiles/add_task_week.php" id="add-task">
                        <input type="text" name ="task" placeholder="Entrer the task" required class="box">
                        <input type="submit" name="submit" value="add task" class="btn">
                    </form>

                    <?php
                    $tasks = include 'phpfiles/fetch_tasks_week.php';
                    if (empty($tasks)) {
                        echo '<p>Aucun task</p>';
                    } else {
                        foreach ($tasks as $task) { ?>
                            <div class="task">
                            <div class="checkbox" id="checkbox"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16" id=".bi-check-square-fill">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                            </svg>
                            <?php echo '<h3>'.htmlspecialchars($task['description']) .'</h3>'; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16" id="menu-toggle">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                            </svg>
                            <div class="menu" id="menu">
                                <a class="done">Done</a>
                                <form method="post" action="phpfiles/delete_task.php">
                                    <input type="hidden" name="task_id" value="<?php echo htmlspecialchars($task['description']); ?>">
                                    <button class="delete" type=submit>Delete</button>
                                </form>                            </div>
                        </div>
                    <?php }
                    } ?>



                
                </div>
                </div>



                <div id="month" class="page" style="display:none;">
                    <div class="date_day">
                            <div id="current-month" style="margin-right: 20px;"></div>
                            <div id="current-year"></div>
                            
                    </div>
                    <div class="tasks">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                        <form class="add-task" method ="post" action="phpfiles/add_task_month.php" id="add-task">
                            <input type="text" name ="task" placeholder="Entrer the task" required class="box">
                            <input type="submit" name="submit" value="add task" class="btn">
                        </form>
                     <?php
                        $tasks = include 'phpfiles/fetch_tasks_month.php';
                        if (empty($tasks)) {
                            echo '<p>Aucun task</p>';
                        } else {
                            foreach ($tasks as $task) { ?>
                            <div class="task">
                            <div class="checkbox" id="checkbox"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16" id=".bi-check-square-fill">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                            </svg>
                            <?php echo '<h3>'.htmlspecialchars($task['description']) .'</h3>'; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16" id="menu-toggle">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                            </svg>
                            <div class="menu" id="menu">
                                <a class="done">Done</a>
                                <form method="post" action="phpfiles/delete_task.php">
                                <input type="hidden" name="task_id" value="<?php echo htmlspecialchars($task['description']); ?>">
                                <button class="delete" type=submit>Delete</button>
                            </form>
                            </div>
                        </div>
                    <?php }
                    } ?>
               
   
     
                    </div>
                </div>
                    



                    <div id="year" class="page" style="display:none;">
                        <div class="date_day">
                                <div id="current-year"></div>

                        </div>
                        <div class="tasks">

                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                            <form class="add-task" method ="post" action="phpfiles/add_task_year.php" id="add-task">
                                <input type="text" name ="task" placeholder="Entrer the task" required class="box">
                                <input type="submit" name="submit" value="add task" class="btn">
                            </form>
                            <?php
                                $tasks = include 'phpfiles/fetch_tasks_year.php';
                                if (empty($tasks)) {
                                    echo '<p>Aucun task</p>';
                                } else {
                                    foreach ($tasks as $task) { ?>
                            <div class="task">
                            <div class="checkbox" id="checkbox"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16" id=".bi-check-square-fill">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                            </svg>
                            <?php echo '<h3>'.htmlspecialchars($task['description']) .'</h3>'; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16" id="menu-toggle">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
                            </svg>
                            <div class="menu" id="menu">
                                <a class="done">Done</a>
                                <form method="post" action="phpfiles/delete_task.php">
                                <input type="hidden" name="task_id" value="<?php echo htmlspecialchars($task['description']); ?>">
                                <button class="delete" type=submit>Delete</button>
                            </form>
                            </div>
                        </div>
                    <?php }
                    }  ?>
                        
                        
                        
                        
                        
                        
                        </div>
                        </div>
            


        </div>



    </div>
<script src="javascipt/java.js"></script>
</body>
</html>