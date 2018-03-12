
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


/
/
 
T
h
i
s
 
c
l
a
s
s
 
i
s
 
u
s
e
d
 
t
o
 
c
a
c
h
e
 
p
r
e
v
i
o
u
s
l
y
 
i
n
p
u
t
 
f
i
l
t
e
r
e
d
 
v
a
r
i
a
b
l
e
s
.
 
O
n
c
e
 
a
n
 
i
n
p
u
t
 
i
s
 
f
i
l
t
e
r
e
d
 
o
n
c
e
,
 
t
h
e
 
d
a
t
a
 
i
s
 
s
t
o
r
e
d
 
h
e
r
e
 
i
n
 
m
e
m
o
r
y
 
a
n
d
 
r
e
u
s
e
d
 
i
n
s
t
e
a
d
 
o
f
 
c
o
n
s
t
a
n
t
l
y
 
c
a
l
l
i
n
g
 
i
n
p
u
t
 
f
i
l
t
e
r
i
n
g
 
b
e
a
s
t
s
 
w
h
i
c
h
 
m
i
g
h
t
 
b
e
 
t
h
e
 
c
a
u
s
e
 
o
f
 
i
n
t
e
r
m
i
t
t
e
n
t
 
s
l
o
w
d
o
w
n
s
.


/
/
 
A
s
 
J
o
m
r
e
s
 
i
s
 
l
i
k
e
 
a
n
 
o
n
i
o
n
,
 
w
i
t
h
 
d
i
s
c
r
e
e
t
 
p
a
g
e
s
 
t
h
a
t
 
c
a
n
 
b
e
 
c
a
l
l
e
d
 
s
e
p
a
r
a
t
e
l
y
,
 
w
e
 
o
f
t
e
n
 
f
i
n
d
 
t
h
a
t
 
w
e
'
r
e
 
r
e
-
f
i
l
t
e
r
i
n
g
 
t
h
e
 
s
a
m
e
 
u
r
l
 
v
a
r
i
a
b
l
e
s
 
t
i
m
e
 
a
n
d
 
a
g
a
i
n
.
 
F
o
r
 
e
x
a
m
p
l
e
,
 
a
 
t
y
p
i
c
a
l
 
c
a
l
l
 
t
o
 
v
i
e
w
p
r
o
p
e
r
t
y
 
o
n
 
a
 
d
e
f
a
u
l
t
 
i
n
s
t
a
n
c
e
 
o
f
 
F
a
w
l
t
y
 
T
o
w
e
r
s
 
f
r
o
m
 
t
h
e
 
Q
u
i
c
k
s
t
a
r
t
 
c
a
n
 
r
e
s
u
l
t
 
i
n
 
u
s
 
u
s
i
n
g
 
H
T
M
L
 
p
u
r
i
f
i
e
r
 
1
9
 
t
i
m
e
s
 
i
n
 
o
n
e
 
p
a
g
e
 
l
o
a
d
.
 
H
T
M
L
 
p
u
r
i
f
i
e
r
 
i
s
 
s
u
p
e
r
 
e
f
f
e
c
t
i
v
e
 
a
t
 
w
h
a
t
 
i
t
 
d
o
e
s
,
 
b
u
t
 
i
t
'
s
 
a
 
w
a
s
t
e
 
o
f
 
c
p
u
 
l
o
a
d
 
t
i
m
e
s
 
t
o
 
c
o
n
s
t
a
n
t
l
y
 
r
e
-
f
i
l
t
e
r
 
s
o
m
e
t
h
i
n
g
 
t
h
a
t
'
s
 
a
l
r
e
a
d
y
 
b
e
e
n
 
f
i
l
t
e
r
e
d
.
 
W
i
t
h
 
t
h
i
s
 
p
u
r
i
f
i
e
d
 
i
n
p
u
t
s
 
c
a
c
h
e
,
 
w
e
 
c
a
n
 
c
u
t
 
d
o
w
n
 
f
r
o
m
 
1
9
 
c
a
l
l
s
 
t
o
 
h
t
m
l
 
p
u
r
i
f
i
e
r
 
t
o
 
5
.


c
l
a
s
s
 
p
u
r
i
f
i
e
d
_
i
n
p
u
t
s
_
c
a
c
h
e

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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
h
i
s
-
>
c
a
c
h
e
d
_
i
n
p
u
t
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

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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
 
i
s
_
c
a
c
h
e
d
(
$
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
_
h
a
s
h
 
=
 
$
t
h
i
s
-
>
h
a
s
h
_
a
r
r
a
y
(
$
r
e
q
u
e
s
t
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
h
i
s
-
>
c
a
c
h
e
d
_
i
n
p
u
t
s
 
[
 
$
r
e
q
u
e
s
t
_
h
a
s
h
 
]
 
[
 
$
e
l
e
m
e
n
t
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
_
c
a
c
h
e
(
$
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
_
h
a
s
h
 
=
 
$
t
h
i
s
-
>
h
a
s
h
_
a
r
r
a
y
(
$
r
e
q
u
e
s
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
a
c
h
e
d
_
i
n
p
u
t
s
 
[
 
$
r
e
q
u
e
s
t
_
h
a
s
h
 
]
 
[
 
$
e
l
e
m
e
n
t
 
]
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
 
s
e
t
_
c
a
c
h
e
(
$
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
,
 
$
c
l
e
a
n
e
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
_
h
a
s
h
 
=
 
$
t
h
i
s
-
>
h
a
s
h
_
a
r
r
a
y
(
$
r
e
q
u
e
s
t
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
c
h
e
d
_
i
n
p
u
t
s
 
[
 
$
r
e
q
u
e
s
t
_
h
a
s
h
 
]
 
[
 
$
e
l
e
m
e
n
t
 
]
 
=
 
$
c
l
e
a
n
e
d
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
 
h
a
s
h
_
a
r
r
a
y
(
$
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
W
e
'
r
e
 
t
y
p
i
c
a
l
l
y
 
h
a
s
h
i
n
g
 
t
h
e
 
$
_
R
E
Q
U
E
S
T
 
a
r
r
a
y
.
 
W
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
a
 
s
m
a
l
l
 
s
t
r
i
n
g
 
t
h
a
t
 
w
e
 
c
a
n
 
s
u
e
 
t
o
 
c
r
e
a
t
e
 
a
n
 
i
n
d
e
x
 
f
o
r
 
t
h
e
 
c
a
c
h
e
d
_
i
n
p
u
t
s
 
a
r
r
a
y
.

 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
t
h
r
e
a
d
 
h
t
t
p
:
/
/
s
t
a
c
k
o
v
e
r
f
l
o
w
.
c
o
m
/
q
u
e
s
t
i
o
n
s
/
2
2
5
4
2
2
0
/
p
h
p
-
b
e
s
t
-
w
a
y
-
t
o
-
m
d
5
-
m
u
l
t
i
-
d
i
m
e
n
s
i
o
n
a
l
-
a
r
r
a
y
 
s
u
g
g
e
s
t
s
 
t
h
a
t
 
f
o
r
 
s
t
r
i
n
g
s
 
o
f
 
>
 
2
5
 
-
 
3
0
 
c
h
a
r
a
c
t
e
r
s

 
 
 
 
 
 
 
 
/
/
 
s
e
r
i
a
i
z
e
 
i
s
 
q
u
i
c
k
e
r
 
w
h
e
n
 
d
e
a
l
i
n
g
 
w
i
t
h
 
l
a
r
g
e
 
s
t
r
i
n
g
s
.
 
A
s
 
s
e
r
i
a
l
i
z
e
d
 
$
a
r
r
a
y
 
i
s
 
o
f
t
e
n
 
i
n
 
t
h
e
 
r
e
g
i
o
n
 
o
f
 
2
0
0
 
c
h
a
r
a
c
t
e
r
s
,
 
w
e
'
l
l
 
u
s
e
 
s
e
r
i
a
l
i
z
e
 
i
n
s
t
e
a
d
 
o
f
 
j
s
o
n
_
e
n
c
o
d
e

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
m
d
5
(
s
e
r
i
a
l
i
z
e
(
$
a
r
r
a
y
)
)
;

 
 
 
 
}

}

