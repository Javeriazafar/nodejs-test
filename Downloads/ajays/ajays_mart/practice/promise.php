
<script>
function hi(){
promise1=new Promise((resolve,reject)=>{
    resolve("hello g");
});
promise1.then((result)=>{
    console.log(result);
});
console.log("hi");
}
</script>
<!DOCTYPE html>
<html>
<body>


<button onclick="hi()">click</button>


</body>



</html>