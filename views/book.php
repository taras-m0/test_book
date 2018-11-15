<table>
    <thead>
      <tr>
        <th colspan="3">Список книг</th>
      </tr>
      <tr>
          <th>Id</th>
          <th>Название</th>
          <th>Автор</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book){ ?>
        <tr>
            <td><?= $book['id'] ?></td>
            <td><a href="?action=page&book=<?= $book['id'] ?>"><?= $book['name'] ?></a></td>
            <td><a href="?action=page&book=<?= $book['id'] ?>"><?= $book['author'] ?></a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>