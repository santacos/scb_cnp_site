angular.module('commentService', [])
 
.factory('Comment', function($http) {
 
    return {
        // get all the comments
        get : function() {
        // http เป็น method หลักเพื่อเรียกใช้งาน ajax  ตอนนี้เราใช้ .get 
            return $http.get('/comments');
        },
 
        // การบันทึกข้อมูล เห็นค่าด้านใดก็พอจะคุ้นๆ ตากันใช่ไหมครับ
        save : function(commentData) {
            return $http({
                method: 'POST',
                url: '/api/comments',
                headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                data: $.param(commentData)
            });
        },
 
        // .delete เป็นการเรียกใช้ method delete นั้นเอง
        destroy : function(id) {
            return $http.delete('/api/comments/' + id);
        }
    }
 
});