
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
n
f
i
r
m
s
 
t
h
a
t
 
t
h
e
 
k
e
y
 
p
a
i
r
 
h
a
v
e
 
r
i
g
h
t
s
 
t
o
 
q
u
e
r
y
 
a
 
p
r
o
p
e
r
t
y

 
*

 
*
 
O
A
u
t
h
2
 
k
e
y
p
a
i
r
s
 
a
r
e
 
a
s
s
o
c
i
a
t
e
d
 
w
i
t
h
 
C
M
S
 
u
s
e
r
s
.
 
W
h
i
l
s
t
 
k
e
y
p
a
i
r
s
 
c
a
n
 
b
e
l
o
n
g
 
t
o
 
a
n
y
 
r
e
g
i
s
t
e
r
e
d
 
u
s
e
r
 
a
n
y
 
A
P
I
 
f
e
a
t
u
r
e
 
t
h
a
t
 
d
i
r
e
c
t
l
y
 
c
h
a
n
g
e
s
 
o
r
 
e
x
p
o
s
e
s
 
a
 
p
r
o
p
e
r
t
y
 
s
h
o
u
l
d
 
c
a
l
l
 
t
h
i
s
 
c
l
a
s
s
 
t
o
 
c
o
n
f
i
r
m
 
t
h
a
t
 
t
h
e
 
k
e
y
 
p
a
i
r
 
u
s
e
r
 
h
a
s
 
r
i
g
h
t
s
 
t
o
 
p
e
r
f
o
r
m
 
t
h
e
 
a
c
t
i
o
n
 
o
n
 
t
h
e
 
s
p
e
c
i
f
i
c
 
p
r
o
p
e
r
t
y
.
 
K
e
y
p
a
i
r
s
 
n
e
e
d
 
b
o
t
h
 
t
h
e
r
e
f
o
r
e
 
t
o
 
h
a
v
e
 
b
e
e
n
 
g
i
v
e
n
 
a
c
c
e
s
s
 
t
o
 
t
h
e
 
S
c
o
p
e
 
i
n
 
q
u
e
s
t
i
o
n
 
a
n
d
 
a
d
d
i
t
i
o
n
a
l
l
y
 
i
t
 
n
e
e
d
s
 
t
o
 
p
a
s
s
 
t
h
i
s
 
t
e
s
t
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
*
*

*

*
 
V
a
l
i
d
a
t
e
 
t
h
a
t
 
a
 
u
s
e
r
'
s
 
k
e
y
 
p
a
i
r
 
c
a
n
 
a
c
c
e
s
s
 
t
h
i
s
 
p
r
o
p
e
r
t
y

*

*
/

c
l
a
s
s
 
v
a
l
i
d
a
t
e
_
p
r
o
p
e
r
t
y
_
a
c
c
e
s
s

{

	
/
*
*

	
*

	
*
 
C
o
n
s
t
r
u
c
t
o
r

	
*

	
*
/

 
 
 
 
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

 
 
 
 
}


	
/
*
*

	
*

	
*
 
T
e
s
t
s
 
k
e
y
p
a
i
r
 
t
o
 
c
o
n
f
i
r
m
 
t
h
a
t
 
t
h
e
y
 
h
a
v
e
 
r
i
g
h
t
s
 
t
o
 
a
c
c
e
s
s
 
t
h
e
 
p
r
o
p
e
r
t
y
.
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
a
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
o
r
 
t
h
e
 
s
y
s
t
e
m
 
k
e
y
p
a
i
r
 
t
h
e
n
 
t
h
e
 
a
n
s
w
e
r
 
i
s
 
y
e
s
.
 
I
f
 
n
o
t
,
 
t
h
e
n
 
t
h
e
 
m
a
n
a
g
e
r
s
_
p
r
o
p
e
r
t
y
s
_
x
r
e
f
 
t
a
b
l
e
 
i
s
 
q
u
e
r
i
e
d
 
t
o
 
c
h
e
c
k
 
t
h
a
t
 
t
h
e
 
p
r
o
p
e
r
t
y
 
i
s
 
o
n
e
 
o
f
 
t
h
e
 
m
a
n
a
g
e
r
'
s
 
p
r
o
p
e
r
t
i
e
s

	
*

	
*
/

 
 
 
 
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
 
v
a
l
i
d
a
t
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
c
o
p
e
s
 
=
 
F
l
i
g
h
t
:
:
g
e
t
(
'
s
c
o
p
e
s
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
n
 
=
 
F
l
i
g
h
t
:
:
d
b
(
)
;


 
 
 
 
 
 
 
 
$
s
t
m
t
 
=
 
$
c
o
n
n
-
>
p
r
e
p
a
r
e
(
'
S
E
L
E
C
T
 
a
c
c
e
s
s
_
l
e
v
e
l
 
F
R
O
M
 
'
.
F
l
i
g
h
t
:
:
g
e
t
(
'
d
b
p
r
e
f
i
x
'
)
.
'
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
W
H
E
R
E
 
u
s
e
r
i
d
 
=
 
:
i
d
'
)
;

 
 
 
 
 
 
 
 
$
s
t
m
t
-
>
e
x
e
c
u
t
e
(
[
'
i
d
'
 
=
>
 
F
l
i
g
h
t
:
:
g
e
t
(
'
u
s
e
r
_
i
d
'
)
]
)
;

 
 
 
 
 
 
 
 
$
u
s
e
r
 
=
 
$
s
t
m
t
-
>
f
e
t
c
h
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
u
s
e
r
[
'
a
c
c
e
s
s
_
l
e
v
e
l
'
]
 
>
=
 
9
0
 
|
|
 
$
s
c
o
p
e
s
[
0
]
 
=
=
 
'
*
'
)
 
{
 
/
/
 
U
s
e
r
 
i
s
 
a
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
o
r
 
t
h
e
 
s
y
s
t
e
m
 
u
s
e
r

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
t
 
=
 
$
c
o
n
n
-
>
q
u
e
r
y
(
'
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
F
R
O
M
 
'
.
F
l
i
g
h
t
:
:
g
e
t
(
'
d
b
p
r
e
f
i
x
'
)
.
'
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
s
 
O
R
D
E
R
 
B
Y
 
p
r
o
p
e
r
t
y
s
_
u
i
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
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

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
r
o
w
 
=
 
$
s
t
m
t
-
>
f
e
t
c
h
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
[
]
 
=
 
$
r
o
w
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
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
p
r
o
p
e
r
t
y
_
u
i
d
 
F
R
O
M
 
'
.
F
l
i
g
h
t
:
:
g
e
t
(
'
d
b
p
r
e
f
i
x
'
)
.
'
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
_
p
r
o
p
e
r
t
y
s
_
x
r
e
f
 
W
H
E
R
E
 
 
m
a
n
a
g
e
r
_
i
d
 
=
 
:
i
d
 
O
R
D
E
R
 
B
Y
 
p
r
o
p
e
r
t
y
_
u
i
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
t
 
=
 
$
c
o
n
n
-
>
p
r
e
p
a
r
e
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
m
t
-
>
e
x
e
c
u
t
e
(
[
'
i
d
'
 
=
>
 
F
l
i
g
h
t
:
:
g
e
t
(
'
u
s
e
r
_
i
d
'
)
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
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

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
r
o
w
 
=
 
$
s
t
m
t
-
>
f
e
t
c
h
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
[
]
 
=
 
$
r
o
w
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
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
,
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
F
l
i
g
h
t
:
:
h
a
l
t
(
4
0
3
,
 
"
U
s
e
r
 
a
t
t
e
m
p
t
e
d
 
t
o
 
a
c
c
e
s
s
 
a
 
p
r
o
p
e
r
t
y
 
t
h
a
t
 
t
h
e
y
 
d
o
n
'
t
 
h
a
v
e
 
r
i
g
h
t
s
 
t
o
 
a
c
c
e
s
s
"
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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

}

