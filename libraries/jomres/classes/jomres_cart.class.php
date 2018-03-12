
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
o
m
r
e
s
_
c
a
r
t

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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
c
a
r
t
_
d
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
c
a
r
t
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
u
m
b
e
r
_
o
f
_
b
o
o
k
i
n
g
s
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;
 
/
/
 
P
r
o
v
i
d
e
s
 
u
s
 
w
i
t
h
 
a
 
s
i
m
p
l
i
f
i
e
d
 
a
r
r
a
y
 
w
i
t
h
 
t
h
e
 
i
n
d
i
v
i
d
u
a
l
 
b
o
o
k
i
n
g
s
,
 
a
n
d
 
t
h
e
i
r
 
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
n
v
e
r
t
e
d
 
t
o
t
a
l
 
a
n
d
 
d
e
p
o
s
i
t
 
f
i
g
u
r
e
s


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
a
l
c
_
t
o
t
a
l
s
(
)
;

 
 
 
 
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
 
c
a
l
c
_
t
o
t
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 
/
/
 
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
 
"
1
"
)

 
 
 
 
 
 
 
 
/
/
 
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

	
	

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
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
c
a
r
t
_
d
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
v
a
r
_
d
u
m
p
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
c
a
r
t
_
d
a
t
a
)
;
e
x
i
t
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
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
c
a
r
t
_
d
a
t
a
 
a
s
 
$
k
e
y
 
=
>
 
$
d
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
(
f
l
o
a
t
)
 
$
d
a
t
a
[
 
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
(
f
l
o
a
t
)
 
$
d
a
t
a
[
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
]
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
c
o
d
e
 
=
 
$
d
a
t
a
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
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
c
o
n
t
r
a
c
t
_
t
o
t
a
l
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
,
 
$
t
h
i
s
-
>
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
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
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
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
,
 
$
t
h
i
s
-
>
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
t
h
i
s
-
>
n
u
m
b
e
r
_
o
f
_
b
o
o
k
i
n
g
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
t
e
m
s
[
 
$
k
e
y
 
]
 
=
 
a
r
r
a
y
(
'
t
o
t
a
l
'
 
=
>
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
,
 
'
d
e
p
o
s
i
t
'
 
=
>
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
 
+
 
$
c
o
n
t
r
a
c
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
=
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
 
+
 
$
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
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
 
m
o
v
e
_
f
r
o
m
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
t
o
_
c
a
r
t
_
a
r
r
a
y
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
2
0
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

 
 
 
 
 
 
 
 
s
e
t
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
(
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
c
a
r
t
_
d
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
c
a
r
t
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
c
a
r
t
_
d
a
t
a
[
 
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
 
]
 
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
t
m
p
b
o
o
k
i
n
g
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
-
>
c
a
r
t
_
d
a
t
a
[
 
$
r
a
n
d
o
m
_
i
d
e
n
t
i
f
i
e
r
 
]
[
 
'
t
m
p
g
u
e
s
t
'
 
]
 
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
t
m
p
g
u
e
s
t
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
-
>
r
e
s
e
t
T
e
m
p
B
o
o
k
i
n
g
D
a
t
a
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
-
>
r
e
s
e
t
T
e
m
p
G
u
e
s
t
D
a
t
a
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
a
l
c
_
t
o
t
a
l
s
(
)
;

 
 
 
 
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
 
r
e
m
o
v
e
_
f
r
o
m
_
c
a
r
t
(
$
i
d
e
n
t
i
f
i
e
r
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
(
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
c
a
r
t
_
d
a
t
a
[
 
$
i
d
e
n
t
i
f
i
e
r
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
u
n
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
c
a
r
t
_
d
a
t
a
[
 
$
i
d
e
n
t
i
f
i
e
r
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
a
l
c
_
t
o
t
a
l
s
(
)
;

 
 
 
 
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
 
b
u
i
l
d
_
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
t
a
_
f
o
r
_
p
a
y
m
e
n
t
_
g
a
t
e
w
a
y
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
r
e
s
e
t
T
e
m
p
B
o
o
k
i
n
g
D
a
t
a
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
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
,
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
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
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
,
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
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
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
c
a
r
t
_
p
a
y
m
e
n
t
'
,
 
t
r
u
e
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
-
>
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
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
,
 
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
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
'
c
o
n
t
r
a
c
t
_
t
o
t
a
l
'
 
=
>
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
,
 
'
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
'
 
=
>
 
$
t
h
i
s
-
>
d
e
p
o
s
i
t
_
r
e
q
u
i
r
e
d
)
;

 
 
 
 
}

}

