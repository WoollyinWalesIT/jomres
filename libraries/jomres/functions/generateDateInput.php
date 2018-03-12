
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
*
*

 
*
 
M
a
k
e
s
 
a
 
j
a
v
a
s
c
r
i
p
t
 
d
a
t
e
 
i
n
p
u
t
 
f
i
e
l
d
.
 
C
r
e
a
t
e
s
 
a
 
r
a
n
d
o
m
 
n
a
m
e
 
f
o
r
 
t
h
e
 
f
o
r
m
 
e
l
e
m
e
n
t
 
e
a
c
h
 
t
i
m
e
 
s
o
 
t
h
a
t
 
m
u
l
t
i
p
l
e
 
j
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
o
r
m
s
 
c
a
n
 
b
e
 
u
s
e
d
 
o
n
 
t
h
e
 
s
a
m
e
 
p
a
g
e
 
w
i
t
h
o
u
t
 
c
o
l
l
i
s
i
o
n
.

 
*
/

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
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
$
f
i
e
l
d
N
a
m
e
,
 
$
d
a
t
e
V
a
l
u
e
 
=
 
'
'
,
 
$
m
y
I
D
 
=
 
f
a
l
s
e
,
 
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
 
f
a
l
s
e
,
 
$
h
i
s
t
o
r
i
c
 
=
 
f
a
l
s
e
)

{

 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
g
i
v
e
 
t
h
e
 
j
a
v
a
s
c
r
i
p
t
 
d
a
t
e
 
f
u
n
c
t
i
o
n
 
a
 
r
a
n
d
o
m
 
n
a
m
e
 
b
e
c
a
u
s
e
 
i
t
 
w
i
l
l
 
b
e
 
c
a
l
l
e
d
 
b
y
 
b
o
t
h
 
t
h
e
 
c
o
m
p
o
n
e
n
t
 
a
n
d
 
m
o
d
u
l
e
s

 
 
 
 
$
u
n
i
q
u
e
I
D
 
=
 
'
'
;

 
 
 
 
$
o
u
t
p
u
t
 
=
 
'
'
;


 
 
 
 
/
/
 
I
f
 
t
h
i
s
 
d
a
t
e
 
p
i
c
k
e
r
 
i
s
 
"
a
r
r
i
v
a
l
D
a
t
e
"
 
t
h
e
n
 
w
e
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
a
 
d
e
p
a
r
t
u
r
e
 
d
a
t
e
 
i
n
p
u
t
 
n
a
m
e
 
t
o
o
,
 
t
h
e
n
 
s
e
t
 
i
t
 
i
n
 
s
h
o
w
t
i
m
e
.
 
W
i
t
h
 
t
h
a
t
 
w
e
'
l
l
 
b
e
 
a
b
l
e
 
t
o
 
t
e
l
l
 
t
h
i
s
 
s
e
t
 
o
f
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
w
h
a
t
 
t
h
e
 
i
d
 
o
f
 
t
h
e

 
 
 
 
/
/
 
d
e
p
a
r
t
u
r
e
D
a
t
e
 
i
s
 
s
o
 
t
h
a
t
 
i
t
 
c
a
n
 
s
e
t
 
i
t
'
s
 
d
a
t
e
 
w
h
e
n
 
t
h
i
s
 
o
n
e
 
c
h
a
n
g
e
s


 
 
 
 
$
u
n
i
q
u
e
I
D
 
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
1
5
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
p
l
a
c
e
h
o
l
d
e
r
 
=
 
'
'
;


 
 
 
 
i
f
 
(
$
f
i
e
l
d
N
a
m
e
 
=
=
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
|
|
 
$
f
i
e
l
d
N
a
m
e
 
=
=
 
'
a
s
c
_
a
r
r
i
v
a
l
D
a
t
e
'
)
 
{

 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
,
 
$
u
n
i
q
u
e
I
D
.
'
_
X
X
X
'
)
;


 
 
 
 
 
 
 
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
,
 
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
,
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
,
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
)
;
e
x
i
t
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
 
'
'
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
)
 
|
|
 
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
 
=
=
 
'
'
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
)
 
|
|
 
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
=
=
 
'
'
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
=
 
'
'
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
 
=
=
 
'
'

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
a
c
e
h
o
l
d
e
r
 
=
 
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
V
a
l
u
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
f
i
e
l
d
N
a
m
e
 
=
=
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
 
|
|
 
$
f
i
e
l
d
N
a
m
e
 
=
=
 
'
a
s
c
_
d
e
p
a
r
t
u
r
e
D
a
t
e
'
)
 
{

 
 
 
 
 
 
 
 
$
u
n
i
q
u
e
I
D
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
)
 
|
|
 
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
r
r
i
v
a
l
D
a
t
e
'
]
 
=
=
 
'
'
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
)
 
|
|
 
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
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
=
=
 
'
'
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
=
 
'
'
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
 
=
=
 
'
'

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
a
c
e
h
o
l
d
e
r
 
=
 
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
V
a
l
u
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
a
l
l
 
o
t
h
e
r
 
d
a
t
e
 
i
n
p
u
t
 
f
i
e
l
d
s

 
 
 
 
 
 
 
 
i
f
 
(
$
d
a
t
e
V
a
l
u
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
V
a
l
u
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
$
d
a
t
e
V
a
l
u
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
d
a
t
e
V
a
l
u
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
d
a
t
e
V
a
l
u
e
,
 
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
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
=
'
'
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
i
s
_
s
i
n
g
l
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
i
n
s
t
a
l
l
a
t
i
o
n
'
]
 
=
=
 
"
1
"
)
 
{

	
	
$
a
l
l
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
u
i
d
s
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
a
l
l
_
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
_
i
n
_
s
y
s
t
e
m
'
)
;


	
	
s
e
t
_
s
h
o
w
t
i
m
e
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
u
i
d
'
,
 
$
a
l
l
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
u
i
d
s
[
 
0
 
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
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
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
u
i
d
'
)
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
;


	
	
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
 
!
=
 
'
'
 
&
&
 
(
i
n
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
'
 
]
 
!
=
 
0
 
 
)
 
{

	
	
	
f
o
r
 
(
$
i
=
0
;
$
i
<
=
6
;
$
i
+
+
)
 
{

	
	
	
	
i
f
 
(
$
i
 
!
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
y
'
 
]
 
)
 
{

	
	
	
	
	
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
.
=
 
'
d
a
y
 
!
=
 
'
.
$
i
 
.
'
 
&
&
 
'
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
r
e
t
u
r
n
 
[
(
d
a
y
 
!
=
 
1
 
&
&
 
d
a
y
 
!
=
 
2
)
]
;

	
	
	
}

	
	
	
i
f
 
(
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
!
=
 
'
'
 
)
 
{

	
	
	
	
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
 
=
 
'
b
e
f
o
r
e
S
h
o
w
D
a
y
:
 
f
u
n
c
t
i
o
n
(
d
a
t
e
)
 
{

	
	
	
	
v
a
r
 
d
a
y
 
=
 
d
a
t
e
.
g
e
t
D
a
y
(
)
;

	
	
	
	
r
e
t
u
r
n
 
[
(
'
.
s
u
b
s
t
r
(
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
,
 
0
,
 
-
4
)
.
'
)
]
;

	
	
	
}
,
'
;

	
	
	
}

	
	
}

	
}

 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
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
a
l
_
i
n
p
u
t
'
 
]
;

 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
=
 
s
t
r
t
o
l
o
w
e
r
(
s
t
r
_
r
e
p
l
a
c
e
(
'
%
'
,
 
'
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
)
;
 
/
/
 
F
o
r
 
t
h
e
 
n
e
w
 
j
q
u
e
r
y
 
c
a
l
e
n
d
a
r
,
 
w
e
'
l
l
 
s
t
r
i
p
 
o
u
t
 
t
h
e
 
%
 
s
y
m
b
o
l
s
.
 
T
h
i
s
 
s
h
o
u
l
d
 
m
e
a
n
 
t
h
a
t
 
w
e
 
d
o
n
'
t
 
n
e
e
d
 
t
o
 
f
o
r
c
e
 
u
p
g
r
a
d
e
r
s
 
t
o
 
r
e
s
e
t
 
t
h
e
i
r
 
s
e
t
t
i
n
g
s
.

 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
y
'
,
 
'
y
y
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
;

 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
m
'
,
 
'
m
m
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
;

 
 
 
 
$
d
a
t
e
F
o
r
m
a
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
d
'
,
 
'
d
d
'
,
 
$
d
a
t
e
F
o
r
m
a
t
)
;


 
 
 
 
i
f
 
(
!
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
C
A
L
E
N
D
A
R
_
R
T
L
'
)
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
C
A
L
E
N
D
A
R
_
R
T
L
'
,
 
'
f
a
l
s
e
'
)
;

 
 
 
 
}


 
 
 
 
$
s
i
z
e
 
=
 
'
 
s
i
z
e
=
"
1
0
"
 
'
;

 
 
 
 
$
i
n
p
u
t
_
c
l
a
s
s
 
=
 
'
'
;

 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
$
s
i
z
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
i
n
p
u
t
_
c
l
a
s
s
 
=
 
'
 
i
n
p
u
t
-
s
m
a
l
l
 
'
;

 
 
 
 
}


 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>

	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
 
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
 
{

	
	
	
d
a
t
e
F
o
r
m
a
t
:
 
"
'
 
.
$
d
a
t
e
F
o
r
m
a
t
.
'
"
,
 
'
;


 
 
 
 
i
f
 
(
$
h
i
s
t
o
r
i
c
)
 
{
 
/
/
 
C
a
n
 
w
e
 
s
h
o
w
 
o
l
d
e
r
 
d
a
t
e
s
?
 
B
y
 
d
e
f
a
u
l
t
 
n
o

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
m
i
n
D
a
t
e
:
 
"
-
5
Y
"
,
 
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
m
i
n
D
a
t
e
:
 
0
,
 
'
;

 
 
 
 
}


 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
m
a
x
D
a
t
e
:
 
"
+
5
Y
"
,

	
	
'
;


 
 
 
 
i
f
 
(
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
&
&
 
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
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
 
=
=
 
'
2
'
)
 
|
|
 
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
b
u
t
t
o
n
I
m
a
g
e
:
 
\
'
'
.
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
c
a
l
e
n
d
a
r
.
p
n
g
\
'
,
'
;

 
 
 
 
 
 
 
 
$
b
s
3
_
i
c
o
n
 
=
 
'
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
b
u
t
t
o
n
T
e
x
t
:
 
"
"
,
'
;

 
 
 
 
 
 
 
 
$
b
s
3
_
i
c
o
n
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
i
n
p
u
t
-
g
r
o
u
p
-
a
d
d
o
n
"
 
i
d
=
"
d
p
_
t
r
i
g
g
e
r
_
'
.
$
u
n
i
q
u
e
I
D
.
'
"
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
a
l
e
n
d
a
r
"
>
<
/
i
>
<
/
s
p
a
n
>
'
;

 
 
 
 
}


 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'

	
	
	
b
u
t
t
o
n
I
m
a
g
e
O
n
l
y
:
 
t
r
u
e
,

	
	
	
s
h
o
w
O
n
:
 
"
b
o
t
h
"
,

	
	
	
c
h
a
n
g
e
M
o
n
t
h
:
 
t
r
u
e
,

	
	
	
c
h
a
n
g
e
Y
e
a
r
:
 
t
r
u
e
,

	
	
	
n
u
m
b
e
r
O
f
M
o
n
t
h
s
:
 
1
,

	
	
	
s
h
o
w
O
t
h
e
r
M
o
n
t
h
s
:
 
t
r
u
e
,

	
	
	
s
e
l
e
c
t
O
t
h
e
r
M
o
n
t
h
s
:
 
t
r
u
e
,
'
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
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
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
o
u
t
p
u
t
 
.
=
 
'
f
i
r
s
t
D
a
y
:
 
0
,
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
f
i
r
s
t
D
a
y
:
 
1
,
'
;

 
 
 
 
}

	
$
o
u
t
p
u
t
 
.
=
 
$
p
r
e
d
e
f
i
n
e
d
_
a
r
r
i
v
a
l
_
d
a
y
_
r
e
t
u
r
n
_
s
t
r
i
n
g
;

 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
	
s
h
o
w
B
u
t
t
o
n
P
a
n
e
l
:
 
t
r
u
e
'
;

 
 
 
 
i
f
 
(
$
f
i
e
l
d
N
a
m
e
 
=
=
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
|
|
 
$
f
i
e
l
d
N
a
m
e
 
=
=
 
'
a
s
c
_
a
r
r
i
v
a
l
D
a
t
e
'
)
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
,
o
n
S
e
l
e
c
t
:
 
f
u
n
c
t
i
o
n
(
s
e
l
e
c
t
e
d
D
a
t
e
)
 
{

	
	
	
	
v
a
r
 
n
e
x
t
D
a
y
D
a
t
e
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
 
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
g
e
t
D
a
t
e
\
'
,
 
\
'
+
1
d
\
'
)
;

	
	
	
	
n
e
x
t
D
a
y
D
a
t
e
.
s
e
t
D
a
t
e
(
n
e
x
t
D
a
y
D
a
t
e
.
g
e
t
D
a
t
e
(
)
 
+
 
1
)
;

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
 
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
s
e
t
D
a
t
e
\
'
,
 
n
e
x
t
D
a
y
D
a
t
e
)
;

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
 
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
o
p
t
i
o
n
\
'
,
 
{
m
i
n
D
a
t
e
:
 
j
o
m
r
e
s
J
q
u
e
r
y
(
t
h
i
s
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
g
e
t
D
a
t
e
\
'
)
}
)
;

	
	
	
	
}
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
,
 
o
n
C
l
o
s
e
:
 
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
 
.
g
e
t
_
s
h
o
w
t
i
m
e
(
'
d
e
p
a
r
t
u
r
e
_
d
a
t
e
_
u
n
i
q
u
e
_
i
d
'
)
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
\
'
s
h
o
w
\
'
)
;

	
	
	
	
}
'
;

 
 
 
 
}


 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'
}
 
)
;


	
}
)
;
'
;


 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
&
&
 
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
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
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'

	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
 
{
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
d
p
_
t
r
i
g
g
e
r
_
'
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
o
n
(
"
c
l
i
c
k
"
,
 
f
u
n
c
t
i
o
n
(
)
 
{
j
o
m
r
e
s
J
q
u
e
r
y
(
"
#
'
.
$
u
n
i
q
u
e
I
D
.
'
"
)
.
d
a
t
e
p
i
c
k
e
r
(
"
s
h
o
w
"
)
;
}
)
}
)
;

	
	
'
;

 
 
 
 
}


 
 
 
 
$
o
u
t
p
u
t
 
.
=
 
'

	
<
/
s
c
r
i
p
t
>

	
<
d
i
v
 
c
l
a
s
s
=
"
i
n
p
u
t
-
g
r
o
u
p
"
>

	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
r
e
a
d
o
n
l
y
=
"
r
e
a
d
o
n
l
y
"
 
s
t
y
l
e
=
"
c
u
r
s
o
r
:
p
o
i
n
t
e
r
;
 
b
a
c
k
g
r
o
u
n
d
-
c
o
l
o
r
:
 
#
F
F
F
F
F
F
;
"
 
'
 
.
$
s
i
z
e
.
'
 
n
a
m
e
=
"
'
.
$
f
i
e
l
d
N
a
m
e
.
'
"
 
i
d
=
"
'
.
$
u
n
i
q
u
e
I
D
.
'
"
 
v
a
l
u
e
=
"
'
.
$
d
a
t
e
V
a
l
u
e
.
'
"
 
p
l
a
c
e
h
o
l
d
e
r
=
"
'
.
$
p
l
a
c
e
h
o
l
d
e
r
.
'
"
 
c
l
a
s
s
=
"
'
.
$
i
n
p
u
t
_
c
l
a
s
s
.
'
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
/
>
'
.
$
b
s
3
_
i
c
o
n
.
'

	
<
/
d
i
v
>
'
;


 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
a
r
r
a
y
(
'
I
N
P
U
T
'
 
=
>
 
$
o
u
t
p
u
t
)
;

 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
j
s
_
c
a
l
e
n
d
a
r
_
i
n
p
u
t
.
h
t
m
l
'
)
;

 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
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
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

}

