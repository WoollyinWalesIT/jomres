
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
1
6
0
0
0
l
o
a
d
e
r
_
w
i
z
a
r
d

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
t
e
s
t
_
f
o
r
_
i
o
n
c
u
b
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
<
p
 
c
l
a
s
s
=
'
a
l
e
r
t
 
a
l
e
r
t
-
d
a
n
g
e
r
'
>
E
r
r
o
r
,
 
I
o
n
c
u
b
e
 
l
o
a
d
e
r
s
 
a
r
e
 
n
o
t
 
i
n
s
t
a
l
l
e
d
.
<
/
p
>
<
p
>
P
l
e
a
s
e
 
u
s
e
 
t
h
e
 
l
o
a
d
e
r
 
w
i
z
a
r
d
 
f
o
u
n
d
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
i
o
n
c
u
b
e
.
c
o
m
/
l
o
a
d
e
r
s
.
p
h
p
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
o
n
 
I
o
n
c
u
b
e
'
s
 
w
e
b
s
i
t
e
<
/
a
>
 
f
o
r
 
m
o
r
e
 
i
n
f
o
r
m
a
t
i
o
n
 
o
n
 
h
o
w
 
t
o
 
i
n
s
t
a
l
l
 
l
o
a
d
e
r
s
 
o
n
 
y
o
u
r
 
s
e
r
v
e
r
.
<
/
p
>
"
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
i
o
n
c
u
b
e
_
l
o
a
d
e
r
_
v
e
r
s
i
o
n
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
o
n
c
u
b
e
V
e
r
s
i
o
n
 
=
 
i
o
n
c
u
b
e
_
l
o
a
d
e
r
_
v
e
r
s
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
o
n
c
u
b
e
M
a
j
o
r
V
e
r
s
i
o
n
 
=
 
(
i
n
t
)
 
s
u
b
s
t
r
(
$
i
o
n
c
u
b
e
V
e
r
s
i
o
n
,
 
0
,
 
s
t
r
p
o
s
(
$
i
o
n
c
u
b
e
V
e
r
s
i
o
n
,
 
'
.
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
o
n
c
u
b
e
M
i
n
o
r
V
e
r
s
i
o
n
 
=
 
(
i
n
t
)
 
s
u
b
s
t
r
(
$
i
o
n
c
u
b
e
V
e
r
s
i
o
n
,
 
s
t
r
p
o
s
(
$
i
o
n
c
u
b
e
V
e
r
s
i
o
n
,
 
'
.
'
)
 
+
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
o
n
c
u
b
e
M
a
j
o
r
V
e
r
s
i
o
n
 
<
 
5
 
|
|
 
(
$
i
o
n
c
u
b
e
M
a
j
o
r
V
e
r
s
i
o
n
 
=
=
 
0
 
&
&
 
$
i
o
n
c
u
b
e
M
i
n
o
r
V
e
r
s
i
o
n
 
<
 
2
1
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
<
p
 
c
l
a
s
s
=
'
a
l
e
r
t
 
a
l
e
r
t
-
w
a
r
n
i
n
g
'
>
U
h
 
o
h
,
 
I
o
n
c
u
b
e
 
l
o
a
d
e
r
s
 
a
r
e
 
i
n
s
t
a
l
l
e
d
,
 
h
o
w
e
v
e
r
 
t
h
e
y
 
m
a
y
 
b
e
 
t
o
o
 
o
l
d
 
t
o
 
r
u
n
 
t
h
e
s
e
 
s
c
r
i
p
t
s
.
<
/
p
>
<
p
>
P
l
e
a
s
e
 
v
i
s
i
t
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
i
o
n
c
u
b
e
.
c
o
m
/
l
o
a
d
e
r
s
.
p
h
p
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
I
o
n
c
u
b
e
'
s
 
w
e
b
s
i
t
e
<
/
a
>
 
t
o
 
d
o
w
n
l
o
a
d
 
t
h
e
 
m
o
s
t
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
s
 
o
f
 
t
h
e
 
l
o
a
d
e
r
 
w
i
z
a
r
d
.
 
T
h
i
s
 
w
i
l
l
 
w
a
l
k
 
y
o
u
 
t
h
r
o
u
g
h
 
i
n
s
t
a
l
l
i
n
g
 
t
h
e
 
l
o
a
d
e
r
s
.
 
A
l
t
e
r
n
a
t
i
v
e
l
y
,
 
a
s
k
 
y
o
u
r
 
h
o
s
t
s
 
f
o
r
 
h
e
l
p
.
<
/
p
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
<
p
 
c
l
a
s
s
=
'
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
'
>
S
u
c
c
e
s
s
,
 
I
o
n
c
u
b
e
 
l
o
a
d
e
r
s
 
a
r
e
 
i
n
s
t
a
l
l
e
d
.
<
/
p
>
<
p
>
I
f
 
y
o
u
 
r
u
n
 
i
n
t
o
 
a
n
y
 
p
r
o
b
l
e
m
s
 
r
u
n
n
i
n
g
 
t
h
e
 
l
o
a
d
e
r
s
 
o
n
 
y
o
u
r
 
s
e
r
v
e
r
,
 
p
l
e
a
s
e
 
v
i
s
i
t
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
i
o
n
c
u
b
e
.
c
o
m
/
l
o
a
d
e
r
s
.
p
h
p
'
 
t
a
r
g
e
t
=
'
_
b
l
a
n
k
'
>
I
o
n
c
u
b
e
'
s
 
w
e
b
s
i
t
e
<
/
a
>
 
t
o
 
d
o
w
n
l
o
a
d
 
t
h
e
 
m
o
s
t
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
s
 
o
f
 
t
h
e
 
l
o
a
d
e
r
 
w
i
z
a
r
d
.
 
T
h
i
s
 
w
i
l
l
 
w
a
l
k
 
y
o
u
 
t
h
r
o
u
g
h
 
i
n
s
t
a
l
l
i
n
g
 
t
h
e
 
l
o
a
d
e
r
s
.
 
A
l
t
e
r
n
a
t
i
v
e
l
y
,
 
a
s
k
 
y
o
u
r
 
h
o
s
t
s
 
f
o
r
 
h
e
l
p
.
<
/
p
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
e
s
t
_
f
o
r
_
i
o
n
c
u
b
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
e
x
t
e
n
s
i
o
n
_
l
o
a
d
e
d
(
'
i
o
n
C
u
b
e
 
L
o
a
d
e
r
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
i
o
n
c
u
b
e
_
f
i
l
e
_
i
s
_
e
n
c
o
d
e
d
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
p
h
p
i
n
f
o
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
o
b
_
s
t
a
r
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
p
h
p
i
n
f
o
(
8
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
h
p
i
n
f
o
 
=
 
o
b
_
g
e
t
_
c
l
e
a
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
a
l
s
e
 
!
=
=
 
s
t
r
p
o
s
(
$
p
h
p
i
n
f
o
,
 
'
i
o
n
C
u
b
e
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

