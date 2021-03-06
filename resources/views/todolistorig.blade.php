<!DOCTYPE html>
<html>
  <head>
    <title>Todolist</title>
    <style>
    body {
  font-family: helvetica, sans-serif;
  font-size: 16px;
  line-height: 1.4em;
  width: 600px;
  margin: 96px auto;
}

#todolist-container {
  padding: 0;
  margin-top: 64px;
}

.task {
  list-style: none;
  font-size: 22px;
  line-height: 1.8em;
}

  .task.completed {
    text-decoration: line-through;
    opacity: 0.5;
  }

#new-task-input {
  width: 360px;
  font-size: 16px;
  line-height: 1.4em;
  border: none;
  border-bottom: 1px solid #888;
  margin: 0px 12px;
}

  #new-task-input:focus {
    outline: none;
    border-bottom-color: #0D99FC;
  }

button {
  background: #0D99FC;
  border: none;
  border-radius: 3px;
  color: white;
  font-size: 16px;
  line-height: 1.4em;
}
    </style>
  </head>
  <body>
    <form>
      <label>
        Task Name
        <input id="new-task-input" type="text" placeholder="Pick up milk">
      </label>
      <button type="button" id="add-task-button">
        Add Task
      </button>
    </form>
    <ul id="todolist-container">
    </ul>
    
    <script type="text/template" id="list-item-template">
    <li class="task">
      <label>
        <input class="checkbox" type="checkbox">
        <span class="task-name"><!-- TASK_NAME --></span>
      </label>
    </li>
    </script>

    <script src="todolist.js"></script>
  </body>
</html>