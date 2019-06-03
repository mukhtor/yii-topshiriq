    <?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div>
        <div class="map">
            <div class="container">
                <h3 class="title ">BIZNING <span>MANZIL</span></h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
                <div class="contact-grids">

                    <div class="site-contact">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                            <div class="alert alert-success">
                                Thank you for contacting us. We will respond to you as soon as possible.
                            </div>

                            <p>
                                Note that if you turn on the Yii debugger, you should be able
                                to view the mail message on the mail panel of the debugger.
                                <?php if (Yii::$app->mailer->useFileTransport): ?>
                                    Because the application is in development mode, the email is not sent but saved as
                                    a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                                        Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                                    application component to be false to enable email sending.
                                <?php endif; ?>
                            </p>

                        <?php else: ?>

                            <p>
                                If you have business inquiries or other questions, please fill out the following form to contact us.
                                Thank you.
                            </p>

                            <div class="row">
                                <div class="col-lg-5">

                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'email') ?>

                                    <?= $form->field($model, 'subject') ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                    ]) ?>

                                    <div class="form-group">
                                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>

                        <?php endif; ?>
                    </div>

                    <div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
                        <div class="contact-grid1">
                            <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                            <h4>Manzil</h4>
                            <p>Xorazm viloyati hazorasp tumani<span>sanoat maxllasi 13 uy</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
                        <div class="contact-grid1">
                            <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                            <h4>Telefonlar!!!</h4>
                            <p>+998943107230<span>+998943207230</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
                        <div class="contact-grid1">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p><a href="mailto:mukhtorbabadjanov@gmail.com">mukhtorbabadjanov@gmail.com</a><span><a href="mailto:sapratses@gmail.com">sapratses@gmail.com</a></span></p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
    </div>

