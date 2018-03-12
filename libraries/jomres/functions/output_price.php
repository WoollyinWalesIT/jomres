
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


f
u
n
c
t
i
o
n
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
v
a
l
u
e
,
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
'
'
,
 
$
d
o
_
c
o
n
v
e
r
s
i
o
n
 
=
 
t
r
u
e
,
 
$
z
e
r
o
O
K
 
=
 
t
r
u
e
)

{

 
 
 
 
$
p
r
i
c
e
 
=
 
(
f
l
o
a
t
)
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
v
a
l
u
e
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
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
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
$
d
o
_
c
o
n
v
e
r
s
i
o
n
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

	

	
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

	

	
$
c
u
r
r
e
n
c
y
_
c
o
d
e
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
c
u
r
r
e
n
c
y
_
c
o
d
e
s
'
)
;

	

	
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
 
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
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
'
)
;


 
 
 
 
$
c
u
r
r
f
m
t
 
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
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
f
o
r
m
a
t
'
)
;

 
 
 
 
$
c
u
r
r
f
m
t
-
>
g
e
t
_
f
o
r
m
a
t
(
)
;


 
 
 
 
$
w
h
o
l
e
p
a
r
t
 
=
 
i
n
t
v
a
l
(
$
p
r
i
c
e
)
;

 
 
 
 
$
d
e
c
i
m
a
l
p
a
r
t
 
=
 
$
p
r
i
c
e
 
-
 
$
w
h
o
l
e
p
a
r
t
;


 
 
 
 
/
/
 
T
o
 
r
e
s
o
l
v
e
 
i
s
s
u
e
s
 
o
f
 
r
o
u
n
d
i
n
g
 
(
n
o
t
 
s
u
r
e
 
i
f
 
t
h
i
s
 
i
s
 
t
h
e
 
b
e
s
t
 
w
a
y
,
 
w
e
'
l
l
 
n
e
e
d
 
t
o
 
m
o
n
i
t
o
r
 
i
t
)
.
 
I
f
 
t
h
e
 
c
e
n
t
s
/
p
e
n
c
e
/
e
t
c
 
v
a
l
u
e
 
i
s
 
g
r
e
a
t
e
r
 
t
h
a
n
 
.
9
9
 
t
h
e
n
 
w
e
'
l
l
 
s
i
m
p
l
y
 
a
d
d
 
1
 
t
o
 
t
h
e
 
w
h
o
l
e
 
p
a
r
t
.

 
 
 
 
i
f
 
(
$
d
e
c
i
m
a
l
p
a
r
t
 
>
 
.
9
9
)
 
{

 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
w
h
o
l
e
p
a
r
t
 
+
 
1
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
=
 
'
'
 
|
|
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
 
&
&
 
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
c
u
r
r
e
n
c
y
C
o
d
e
'
 
]
)
)
 
{
 
/
/
 
f
o
r
 
v
4
.
5
 
c
o
n
v
e
r
t
i
n
g
 
t
h
e
 
o
l
d
 
c
u
r
r
e
n
c
y
C
o
d
e
 
v
a
l
u
e
 
t
o
 
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
c
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
'
G
B
P
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
p
r
o
p
e
r
t
y
_
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;

 
 
 
 
}

	

 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
j
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
 
=
 
'
0
'
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
j
r
C
o
n
f
i
g
[
 
'
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
 
=
 
$
j
r
C
o
n
f
i
g
[
 
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
 
]
;

 
 
 
 
}


 
 
 
 
$
c
o
n
v
e
r
t
e
d
_
o
u
t
p
u
t
_
p
r
i
c
e
 
=
 
'
'
;


 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
c
u
r
r
e
n
t
_
e
x
c
h
a
n
g
e
_
r
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
g
e
o
l
o
c
a
t
i
o
n
 
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
j
o
m
r
e
s
_
g
e
o
l
o
c
a
t
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
g
e
o
l
o
c
a
t
i
o
n
-
>
a
u
t
o
_
s
e
t
_
u
s
e
r
_
c
u
r
r
e
n
c
y
_
c
o
d
e
(
)
;

 
 
 
 
}

 
 
 
 
$
f
o
r
e
i
g
n
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
u
s
e
r
_
s
e
t
t
i
n
g
s
[
 
'
c
u
r
r
e
n
t
_
e
x
c
h
a
n
g
e
_
r
a
t
e
'
 
]
;


 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
-
>
t
h
i
s
_
c
o
d
e
_
c
a
n
_
b
e
_
c
o
n
v
e
r
t
e
d
(
$
c
u
r
r
e
n
c
y
c
o
d
e
)
 
&
&
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
!
=
 
$
f
o
r
e
i
g
n
 
&
&
 
$
d
o
_
c
o
n
v
e
r
s
i
o
n
 
&
&
 
$
f
o
r
e
i
g
n
 
!
=
 
'
'
 
&
&
 
$
p
r
i
c
e
 
>
 
0
.
0
0
)
 
{

 
 
 
 
 
 
 
 
$
b
a
s
e
 
=
 
$
c
u
r
r
e
n
c
y
c
o
d
e
;

 
 
 
 
 
 
 
 
$
c
o
n
v
e
r
t
e
d
_
p
r
i
c
e
 
=
 
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
c
o
n
v
e
r
s
i
o
n
-
>
c
o
n
v
e
r
t
_
s
u
m
(
$
p
r
i
c
e
,
 
$
b
a
s
e
,
 
$
f
o
r
e
i
g
n
)
;

 
 
 
 
 
 
 
 
$
c
o
n
v
e
r
t
e
d
_
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
f
o
r
e
i
g
n
;


 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
g
e
t
S
y
m
b
o
l
(
$
c
o
n
v
e
r
t
e
d
_
c
u
r
r
e
n
c
y
c
o
d
e
)
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
p
r
e
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
p
o
s
t
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
 
=
 
$
t
m
p
_
p
o
s
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
 
=
 
$
t
m
p
_
p
r
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
o
n
v
e
r
t
e
d
_
p
r
i
c
e
 
=
 
$
c
u
r
r
f
m
t
-
>
g
e
t
_
f
o
r
m
a
t
t
e
d
(
$
c
o
n
v
e
r
t
e
d
_
p
r
i
c
e
)
;

 
 
 
 
 
 
 
 
$
c
o
n
v
e
r
t
e
d
_
o
u
t
p
u
t
_
p
r
i
c
e
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
.
$
c
o
n
v
e
r
t
e
d
_
p
r
i
c
e
.
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
;


 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
g
e
t
S
y
m
b
o
l
(
$
c
u
r
r
e
n
c
y
c
o
d
e
)
;


 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
c
u
r
r
f
m
t
-
>
g
e
t
_
f
o
r
m
a
t
t
e
d
(
$
p
r
i
c
e
)
;

 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
.
$
p
r
i
c
e
.
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
;


 
 
 
 
 
 
 
 
/
/
$
p
r
i
c
e
 
=
 
'
'
.
$
c
o
n
v
e
r
t
e
d
_
o
u
t
p
u
t
_
p
r
i
c
e
.
'
 
<
s
p
a
n
>
(
'
.
$
p
r
i
c
e
.
'
)
<
/
s
p
a
n
>
 
'
;

	
	
$
p
r
i
c
e
 
=
 
$
c
o
n
v
e
r
t
e
d
_
o
u
t
p
u
t
_
p
r
i
c
e
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
g
e
t
S
y
m
b
o
l
(
$
c
u
r
r
e
n
c
y
c
o
d
e
)
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
p
r
e
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
p
o
s
t
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
 
=
 
$
t
m
p
_
p
o
s
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
 
=
 
$
t
m
p
_
p
r
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
i
c
e
 
>
 
0
.
0
0
 
|
|
 
$
z
e
r
o
O
K
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
c
u
r
r
f
m
t
-
>
g
e
t
_
f
o
r
m
a
t
t
e
d
(
$
p
r
i
c
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
.
$
p
r
i
c
e
.
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
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
$
m
r
C
o
n
f
i
g
[
'
p
o
a
_
p
r
i
c
e
'
]
 
!
=
 
'
'
)
 
{

	
	
	
	
$
p
o
a
_
p
r
i
c
e
 
=
 
(
f
l
o
a
t
)
$
m
r
C
o
n
f
i
g
[
'
p
o
a
_
p
r
i
c
e
'
]
;

	
	
	
	
$
p
r
i
c
e
 
=
 
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
.
$
p
o
a
_
p
r
i
c
e
.
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
;

	
	
	
}

	
	
	
e
l
s
e

	
	
	
	
$
p
r
i
c
e
 
=
 
'
 
'
.
$
s
y
m
b
o
l
s
[
 
'
p
r
e
'
 
]
.
j
r
_
g
e
t
t
e
x
t
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
P
R
I
C
E
_
O
N
_
A
P
P
L
I
C
A
T
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
P
R
I
C
E
_
O
N
_
A
P
P
L
I
C
A
T
I
O
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
.
$
s
y
m
b
o
l
s
[
 
'
p
o
s
t
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
p
r
i
c
e
;

}

