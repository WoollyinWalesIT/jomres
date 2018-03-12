
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
0
1
0
0
4
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
i
s
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
 
t
r
u
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

 
 
 
 
 
 
 
 
$
t
h
i
s
_
p
l
u
g
i
n
 
=
 
'
l
i
s
t
'
;

 
 
 
 
 
 
 
 
$
l
a
y
o
u
t
 
=
 
'
'
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
c
u
r
r
e
n
t
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
y
o
u
t
 
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
c
u
r
r
e
n
t
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
l
a
y
o
u
t
 
=
=
 
$
t
h
i
s
_
p
l
u
g
i
n
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
a
j
a
x
_
r
e
s
u
l
t
s
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
 
6
)
;

 
 
 
 
 
 
 
 
}
 
/
/
 
T
h
i
s
 
i
s
 
f
o
r
 
t
h
e
 
l
i
s
t
 
s
c
r
o
l
l
i
n
g
 
f
e
a
t
u
r
e
,
 
w
e
 
n
e
e
d
 
t
o
 
k
n
o
w
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
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
 
t
h
a
t
 
s
h
o
u
l
d
 
b
e
 
r
e
t
u
r
n
e
d


 
 
 
 
 
 
 
 
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
l
i
s
t
_
l
a
y
o
u
t
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
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
l
i
s
t
_
l
a
y
o
u
t
s
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
l
i
s
t
_
l
a
y
o
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
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
t
h
i
s
_
p
l
u
g
i
n
 
]
 
=
 
a
r
r
a
y
(
'
l
a
y
o
u
t
'
 
=
>
 
'
l
i
s
t
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
.
h
t
m
l
'
,
 
'
t
i
t
l
e
'
 
=
>
 
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
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
L
I
S
T
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
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
L
I
S
T
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
,
 
'
p
a
t
h
'
 
=
>
 
n
u
l
l
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
l
i
s
t
_
l
a
y
o
u
t
s
'
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
l
i
s
t
_
l
a
y
o
u
t
s
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
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
P
R
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
L
I
S
T
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
O
P
E
R
T
Y
L
I
S
T
_
L
A
Y
O
U
T
_
L
I
S
T
'
)
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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

