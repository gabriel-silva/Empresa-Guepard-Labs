CREATE TABLE CELLE_VOCABULARIO (
  VOC_ID INT NOT NULL AUTO_INCREMENT,
  VOC_PALAVRA VARCHAR(50) NOT NULL,
  VOC_CATEGORIA VARCHAR(50) NOT NULL,
  VOC_AUDIO BOOLEAN NOT NULL,
  VOC_IMAGEM BOOLEAN NOT NULL,
  PRIMARY KEY (VOC_ID)
) ;