<script type="text/javascript">
        function submitForm(buttonId){
            var myForm = document.getElementById('search-form');
            myForm.action.value= buttonId;
            myForm.submit();
            return false;
        }
</script>
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="index.php" id="search-form" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <a data-toggle="collapse" data-target="#advancedsearch">Advanced search</a>
                </div>        
                <div id="advancedsearch" class="collapse">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="email" class="form-control" id="name">
                        </div>  
                        <div class="form-group">
                            <label for="email">Profession:</label>
                            <input type="email" class="form-control" id="profession">
                        </div> 
                    </div>                    
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">Surname:</label>
                            <input type="email" class="form-control" id="surname">
                        </div> 
                        <div class="form-group">
                            <label for="email">Specialism:</label>
                            <input type="email" class="form-control" id="specialism">
                        </div> 
                    </div>  
                </div>
                <div class="form-group">
                    <button onclick="submitForm(this.id); return false;" type="button" class="btn btn-default" id="searchList" name="searchList">Search</button>  
                    <input name="action" id="action" hidden="hidden" value="searchList"/> 
                </div> 
            </form>
        </div>
    </div>
</div>