<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('comment', function (Blueprint $table) {
            // 🎯 1. 安全删除旧字段 (如果存在)
                    if (Schema::hasColumn('comment', 'blog_id')) {
                                // 如果旧字段有外键约束，必须先删除约束
                                            // ⚠️ 危险：如果您不确定旧约束的名字，可能会失败。这里假设没有完整的约束或使用默认命名。
                                                        try {
                                                                         $table->dropForeign(['blog_id']);
                                                                                     } catch (\Exception $e) {
                                                                                                      // 忽略异常，因为约束可能根本不存在
                                                                                                                  }
                                                                                                                              
                                                                                                                                          // 删除字段
                                                                                                                                                      $table->dropColumn('blog_id');
                                                                                                                                                              }

                                                                                                                                                                      // 🎯 2. 重新添加具有正确约束的新字段
                                                                                                                                                                              // 确保使用 constrained('blog') 来匹配您的单数表名 'blog'
                                                                                                                                                                                      $table->foreignId('blog_id')->constrained('blog')->after('id');
                                                                                                                                                                                          });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comment', function (Blueprint $table) {
            //
        });
    }
};
