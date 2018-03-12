
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
6
0
0
2
a
j
a
x
_
w
e
b
h
o
o
k
s
_
e
n
a
b
l
e
_
t
o
g
g
l
e
 
{

 
 
 
 
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


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
 
)
;

 
 
 
 
 
 
 
 
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
 
 
 
 
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
i
n
t
e
g
r
a
t
i
o
n
_
i
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
"
w
e
b
h
o
o
k
s
"
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
 
=
 
n
e
w
 
w
e
b
h
o
o
k
s
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
-
>
g
e
t
_
a
l
l
_
w
e
b
h
o
o
k
s
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
w
e
b
h
o
o
k
s
-
>
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
)
)

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
I
n
v
a
l
i
d
 
i
n
t
e
g
r
a
t
i
o
n
 
i
d
 
s
e
n
t
,
 
p
o
s
s
i
b
l
e
 
h
a
c
k
 
a
t
t
e
m
p
t
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
w
e
b
h
o
o
k
s
-
>
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
[
"
e
n
a
b
l
e
d
"
]
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
-
>
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
[
"
e
n
a
b
l
e
d
"
]
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
"
D
i
s
a
b
e
d
 
w
e
b
h
o
o
k
 
"
.
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
,
 
'
W
e
b
h
o
o
k
s
'
,
 
'
D
E
B
U
G
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
-
>
w
e
b
h
o
o
k
s
[
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
]
[
"
e
n
a
b
l
e
d
"
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
"
E
n
a
b
l
e
d
 
w
e
b
h
o
o
k
 
"
.
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
,
 
'
W
e
b
h
o
o
k
s
'
,
 
'
D
E
B
U
G
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
-
>
c
o
m
m
i
t
_
i
n
t
e
g
r
a
t
i
o
n
(
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
)
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
