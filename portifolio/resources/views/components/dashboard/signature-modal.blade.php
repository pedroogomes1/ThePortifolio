<!-- Modal Signature -->
<div class="modal fade" id="modalSignature" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalSignatureLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSignatureLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/add/signature" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
          <label for="exampleFormControlTextarea1">Tipo</label>
            <input type="text" class="form-control" placeholder="Tipo de trabalho" aria-label="Recipient's username" aria-describedby="basic-addon2" name="type">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            <label for="exampleFormControlTextarea1">Tipo de Pagamento</label>
            <input type="text" class="form-control" placeholder="Tipo de pagamento" aria-label="Recipient's username" aria-describedby="basic-addon2" name="payamentType">
            <label for="exampleFormControlTextarea1">Preço</label>
            <input type="number" class="form-control" placeholder="R$ 0,00" min="1" aria-label="Recipient's username" aria-describedby="basic-addon2" name="price">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="imagem" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Understood</button>
        </form>
      </div>
      
    </div>
  </div>
</div>